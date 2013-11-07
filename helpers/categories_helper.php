<?php

include_once 'json_helper.php';

function fetch_categories() {
  return read_json('db/categories/categories.json');
}

function fetch_category_by_id($id) {
  return fetch_categories()[$id];
}

function article_for_category($category) {
  $id = $category['id'];
  return "<article class=\"category\" id=\"{$id}\">
    <img src=\"assets/category_images/{$id}.jpg\">
    <span class=\"category-title\">{$category['title']}</span>
  </article>";
}

?>