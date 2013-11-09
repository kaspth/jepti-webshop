<?php

include_once 'json_helper.php';

function fetch_products_for_category_id($id) {
  return read_json(path_for_category_id($id));
}

function image_tag_for_product($product) {
  return "<img class=\"product-banner-image\" src=\"{$product['image_url']}\" alt=\"{$product['image_alt']}\" />";
}

function fetch_product_by_id($id) {
  return find_product_by("id", $id);
}

function fetch_products_for_user_id($id) {
  $products = array();
  map_products(function($product) use ($id, &$products) {
    if ($product["user_id"] == $id)
      $products[] = $product;
  });
  return $products;
}

function find_product_by($key, $value) {
  map_products(function($product) use ($key, $value) {
    if ($product[$key] == $value)
      return $product;
  });
}

function map_products($operation) {
  $category_id = 1;
  $file = path_for_category_id($category_id);

  while(file_exists($file)) {
    $products = read_json($file);
    foreach ($products as $product)
      $operation($product);

    $file = path_for_category_id($category_id++);
  }
  return null;
}

function path_for_category_id($id) {
  return "db/products/{$id}/products.json";
}
?>