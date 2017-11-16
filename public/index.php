<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Access-Control-Max-Age: 86400');    // cache for 1 day
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header("Access-Control-Allow-Headers: X-Requested-With");
date_default_timezone_set('Asia/Jakarta');

$res = [
  'status' => 'good',
  "name"              => str_replace('.herokuapp.com','',$_SERVER['HTTP_HOST']),
  "node"              => gethostname(),
  "server_name"       => $_SERVER['HTTP_HOST'],
  "server_software"   => $_SERVER['SERVER_SOFTWARE'],
  "remote_addr"       => $_SERVER['REMOTE_ADDR']
];

echo json_encode($res);