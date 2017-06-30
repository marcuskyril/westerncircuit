<?php

$routes = array(
  "/" => "home",
  "/contact" => "contact",
  "/crew-search" => "crew-search",
  "/dashboard" => "dashboard",
  "/documentation" => "documentation",
  "/entry-list" => "entry-list",
  "/gallery" => "gallery",
  "/links" => "links",
  "/login" => "login",
  "/media" => "media",
  "/news" => "news",
  "/results" => "results",
  "/schedule" => "schedule",
  "/sponsors" => "sponsors"
);

function getCurrentUri() {
  $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
  $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
  if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
  $uri = '/' . trim($uri, '/');
  return $uri;
}

$base_url = getCurrentUri();

if(isset($routes[$base_url])) {
  require '../app/view/'.$routes[$base_url].'.php';
} else {
  header('HTTP/1.0 404 Not Found');
  require '../app/view/404.php';
}
