<?php

include_once 'json_helper.php';

# rentals are integer indexed arrays of associative arrays
function fetch_rentals_for_user($user) {
  $path = rentals_path_for_user($user);
  return read_json($path);
}

function build_rental($product_id, $renter_id) {
  return array(
    "product_id" => $product_id,
    "renter_id" => $renter_id
  );
}

# a rental is a reference between the current user and the user of the requested product
function add_rental_to_user($user, $rental) {
  if (!isset($user)) return;
  $rentals = fetch_rentals_for_user($user);

  if (!isset($rentals)) $rentals = array();
  $rentals[] = $rental;

  write_json(rentals_path_for_user($user), $rentals);
}

# rental files are keyed by user id.
function rentals_path_for_user($user) {
  return "db/rentals/{$user['id']}.json";
}
?>