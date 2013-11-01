<?php

class Table {
  private $db;

  public function __construct($object)
  {
    $object->schema($this);
  }

  public function datetime($key)
  {
    $db->alter_table("ALTER TABLE table_name COLUMN some_column");
  }
}
?>