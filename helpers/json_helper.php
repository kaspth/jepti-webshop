<?php

function read_json($filename) {
  return json_decode(file_get_contents($filename), true);
}

function write_json($filename, $json) {
  file_put_contents($filename, json_encode($json));
}
?>