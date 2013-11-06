<?php

include_once 'json_helper.php';

function fetch_products_for_category_id($id) {
  return read_json("db/products/{$id}/products.json");
}

function image_tag_for_product($product) {
  return "<img class=\"product-banner-image\" src=\"{$product['image_url']}\" alt=\"{$product['image_alt']}\" />";
}

?>