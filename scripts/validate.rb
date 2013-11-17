require 'w3c_validators'
require 'psych'

class RemoteValidator
  include W3CValidators

  attr_accessor :remote_root, :local_root, :pattern, :validator, :page_arguments

  def initialize(remote_root, local_root = '.', pattern = '*')
    @remote_root = remote_root
    @local_root = File.expand_path(local_root)
    @pattern = pattern

    @results = []
    @validator = MarkupValidator.new
    @page_arguments = read_page_arguments
  end

  def validate
    Dir[@pattern].each do |file|
      next if File.directory? file

      puts "Validating #{file}..."
      validate_page(file).tap do |result|
        @results << result
        yield result if block_given?
      end
    end
  end

  def validate_page(file)
    name = File.basename file
    uri = build_uri name, arguments_for(file)

    @validator.validate_uri uri
  end

  def print_errors(errors = nil)
    if errors
      errors.each { |e| puts e.to_s }
    else
      @results.each { |r| print_errors r.errors }
    end
  end

  def read_page_arguments
    path = File.join @local_root, 'validation.yaml'
    Psych.load File.read(path) if File.exist? path
  end

  def arguments_for(file)
    name = File.basename file, File.extname(file)
    @page_arguments.fetch name, []
  end

  def build_uri(name, arguments = [])
    uri = File.join @remote_root, name

    args = arguments.map do |k, v|
      [k, v].join("=")
    end.join("&")

    uri << "?" << args unless args.empty?
    uri
  end
end