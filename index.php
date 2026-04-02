<?php

error_reporting(E_ALL);
$debug_mode   = getenv('APP_DEBUG') === '1';
ini_set('display_errors', $debug_mode ? '1' : '0');
ini_set('log_errors', '1');

require_once __DIR__ . '/includes/functions.php';

$request_path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$request_path = is_string($request_path) ? $request_path : '/';

$base_path = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');
if ($base_path !== '' && $base_path !== '/' && strpos($request_path, $base_path) === 0) {
  $request_path = substr($request_path, strlen($base_path));
}

$uri = trim($request_path, '/');
if ($uri === '') {
  $uri = 'home';
}

$pages_root    = realpath(__DIR__ . '/views/pages');
$route         = '';
$is_valid_route = preg_match('/^[a-z0-9\/-]+$/i', $uri) === 1 && strpos($uri, '..') === false;

if ($is_valid_route && $pages_root !== false) {
  $candidate = realpath($pages_root . '/' . $uri . '.php');
  $is_in_pages_directory = is_string($candidate) && strpos($candidate, $pages_root . DIRECTORY_SEPARATOR) === 0;

  if ($is_in_pages_directory && is_file($candidate)) {
    $route = $candidate;
  }
}

ob_start();
if ($route !== '') {
  include $route;
} else {
  http_response_code(404);
  include __DIR__ . '/views/pages/404.php';
}
$content = ob_get_clean();

include __DIR__ . '/layout.php';
