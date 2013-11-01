<?php
require_once 'database_record';

class Product extends DatabaseRecord {
  public $name;
  public $description;
  public $value;

  public $user_id; # reference to the user, which the product belongs to.
  public $tags; # should be a relationship

  function __construct($name, $description, $value)
  {
    parent::__construct();

    $this->name = $name;
    $this->description = $desctiption;
    $this->value = $value;
  }

  public function schema($table)
  {
    parent::schema($table);

    $table->string('name');
    $table->string('description');
    $table->unsignedInt('value');

    $table->join('users', 'user_id');
    $table->join('categories', array('through' => 'category'));
  }
}
?>