<?php

include_once 'json_helper.php';

function fetch_categories() {
  return read_json('db/categories/categories.json');
}

function fetch_category_by_id($id) {
  $categories = fetch_categories();
  if ($categories == null) return null;
  return $categories[$id - 1]; # adjust for zero indexing
}

?>