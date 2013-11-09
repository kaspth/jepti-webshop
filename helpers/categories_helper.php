<?php

include_once 'json_helper.php';

function fetch_categories() {
  return read_json('db/categories/categories.json');
}

function fetch_category_by_id($id) {
  return fetch_categories()[$id - 1]; # adjust for zero indexing
}

?>