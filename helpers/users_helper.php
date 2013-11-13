<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

include_once 'json_helper.php';

function fetch_user_by_id($id) {
  $users = read_json('db/users/users.json');
  if (!isset($id) || !isset($users)) return null;
  return $users[$id - 1]; # adjust for zero indexing
}

function fetch_user_by_email($email) {
  $users = read_json('db/users/users.json');
  if (!isset($users)) return null;

  foreach ($users as $user)
    if ($user["email"] == $email)
      return $user;

  return null;
}

function authenticate_user($user, $password) {
  if ($_SESSION["user_id"] == $user["id"])
    return true;

  if ($user["password"] == $password) {
    $_SESSION["user_id"] = $user["id"];
    return true;
  }

  return false;
}

function current_user() {
  if (!isset($_SESSION["user_id"])) return null;
  return fetch_user_by_id($_SESSION["user_id"]);
}

function current_user_path() {
  $id = current_user()["id"];
  return "user.php?id={$id}";
}

function logout_user() {
  unset($_SESSION["user_id"]);
}

function image_tag_for_user($user) {
  return "<img class=\"profile-image\" src=\"assets/user_images/{$user['id']}.jpg\" alt=\"{$user['first_name']}\" />";
}

function pluralize($user) {
  $name = $user['first_name'];
  $lastchar = strtolower(substr($name, -1));
  $suffix = $lastchar == 's' ? "'" : "s";
  return $name . $suffix;
}

?>