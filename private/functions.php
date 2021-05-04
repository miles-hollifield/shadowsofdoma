<?php

/**
 * Finds URL for given file path
 * @param string $script_path File path
 */
function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

/**
 * Encodes the URL
 * @param string $string="" The URL
 */
function u($string="") {
  return urlencode($string);
}

/**
 * Encodes the raw URL
 * @param string $string="" The URL
 */
function raw_u($string="") {
  return rawurlencode($string);
}

/**
 * Convert special characters to HTML entities
 * @param string $string="" The string to be converted
 */
function h($string="") {
  return htmlspecialchars($string);
}

/**
 * 404 error function
 */
function error_404() {
  header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
  exit();
}

/**
 * 500 error function
 */
function error_500() {
  header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
  exit();
}

/**
 * Redirects to different location
 * @param string $location The new location for user
 */
function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

/**
 * Checks if there is a post request
 */
function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

/**
 * Checks if there is a get request
 */
function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

?>
