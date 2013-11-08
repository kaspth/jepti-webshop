<?php

include_once 'json_helper.php';

function fetch_user_by_id($id) {
  $users = read_json('db/users/users.json');
  if (!isset($users)) return null;
  return $users[$id - 1]; # adjust for zero indexing
}

function pluralize($user) {
  $name = $user['first_name'];
  $lastchar = strtolower(substr($name, -1));
  $suffix = $lastchar == 's' ? "'" : "s";
  return $name . $suffix;
}

?>