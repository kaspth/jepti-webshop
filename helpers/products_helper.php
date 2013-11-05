<?php

include_once 'json_helper.php';

function fetch_products_for_category_id($id) {
  return read_json("db/products/{$id}/products.json");
}

?>