<?php

class DatabaseRecord {
  private $connection;

  private $id;
  private $created_at;
  private $updated_at;

  public function __construct($id) {
    $this->id = $id;
    $this->created_at = now();
    $this->updated_at = $this->created_at;
  }

  public function schema($table) {
    $table->primaryKey('id');
    $table->datetime('created_at');
    $table->datetime('updated_at');
  }
}

?>