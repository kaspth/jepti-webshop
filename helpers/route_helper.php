<?php
  $base_url = 'http://m2e13m5ag07.keaweb.dk/';

  function lib_path($path) {
    return 'lib/' . $path;
  }

  function app_path($path) {
    return 'app/' . $path;
  }

  function url_to($path) {
    return $base_url . $path;
  }
?>