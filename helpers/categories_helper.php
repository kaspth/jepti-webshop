<?

include_once 'json_helper.php';

function fetch_categories() {
  return read_json('db/categories/categories.json');
}

?>