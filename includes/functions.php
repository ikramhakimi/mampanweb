<?php

if (!function_exists('include_view_file')) {
  function include_view_file(string $root, string $file, string $suffix = '.php'): ?string
  {
    if ($file === '' || strpos($file, '..') !== false || preg_match('/^[a-z0-9_\/-]+$/i', $file) !== 1) {
      return null;
    }

    $root_path = realpath($root);
    if ($root_path === false) {
      return null;
    }

    $candidate = realpath($root_path . '/' . $file . $suffix);
    if (!is_string($candidate)) {
      return null;
    }

    $is_within_root = strpos($candidate, $root_path . DIRECTORY_SEPARATOR) === 0;
    if (!$is_within_root || !is_file($candidate)) {
      return null;
    }

    return $candidate;
  }
}

if (!function_exists('component')) {
  function component(string $file, array $data = []): void
  {
    $targets = [];

    // Support explicit paths like "sections/services", "partials/site-header", "components/card".
    if (strpos($file, '/') !== false) {
      $targets[] = [__DIR__ . '/../views', $file];
    }

    // Backward compatibility alias: "section-services" => "views/sections/services.php".
    if (strpos($file, 'section-') === 0) {
      $targets[] = [__DIR__ . '/../views/sections', substr($file, strlen('section-'))];
    }

    $targets[] = [__DIR__ . '/../views/components', $file];
    $targets[] = [__DIR__ . '/../views/partials', $file];
    $targets[] = [__DIR__ . '/../views/sections', $file];

    $component_path = null;
    foreach ($targets as [$root, $target_file]) {
      $component_path = include_view_file($root, $target_file);
      if ($component_path !== null) {
        break;
      }
    }

    if ($component_path === null) {
      return;
    }

    if ($data !== []) {
      extract($data, EXTR_SKIP);
    }

    include $component_path;
  }
}
