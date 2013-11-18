require 'w3c_validators'
require 'psych'

class PatternValidator
  include W3CValidators

  attr_accessor :pattern, :validator

  def initialize(root = '.', pattern = '*')
    @root = File.expand_path(root)
    @pattern = pattern
    @validator = MarkupValidator.new
    @results = []
  end

  class << self
    def validate(*args, options)
      new(*args).validate(options)
    end
  end

  def validate(options = {})
    print = options[:print_errors] || false

    @validator = CSSValidator.new if options[:validates_css]

    Dir.chdir(@root) do
      Dir[@pattern].each do |file|
        next if File.directory? file

        puts "Validating #{file}..."
        validate_page(file).tap do |result|
          @results << result
          print_errors(result) if print

          yield result if block_given?
        end
      end
    end
  end

  def validate_page(file)
    @validator.validate_file(File.expand_path(file))
  end

  def print_errors(result = nil)
    if result
      if result.errors.empty?
        puts "Page had no errors..."
      else
        result.errors.each { |e| puts e.to_s }
      end
    else
      @results.each { |res| print_errors res }
    end
  end
end

class RemoteValidator < PatternValidator
  attr_accessor :remote_root, :local_root, :page_arguments

  def initialize(remote_root, local_root = '.', pattern = '*')
    super(local_root, pattern)
    @remote_root = remote_root
    @local_root = File.expand_path(local_root)

    @results = []
    @page_arguments = read_page_arguments
  end

  def validate_page(file)
    name = File.basename file
    uri = build_uri name, arguments_for(file)

    puts "At uri #{uri}..."
    @validator.validate_uri uri
  end

  def arguments_for(file)
    name = File.basename file, File.extname(file)
    @page_arguments.fetch name, {}
  end

  def build_uri(name, arguments = {})
    uri = File.join @remote_root, name

    args = arguments.map do |k, v|
      [k, v].join("=")
    end.join("&")

    uri << "?" << args unless args.empty?
    uri
  end

  def read_page_arguments
    path = File.join @local_root, 'validation.yaml'
    Psych.load File.read(path) if File.exist? path
  end
end