<?php
// CORS Settings: mypdftools.site ko allow karne ke liye
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Content-Type: text/plain");

// Login Check (Authentication)
if (!isset($_SERVER['PHP_AUTH_USER']) || 
    ($_SERVER['PHP_AUTH_USER'] != 'keygen@gmail.com' || $_SERVER['PHP_AUTH_PW'] != 'keygen@hammad')) {
    header('WWW-Authenticate: Basic realm="Key Gen"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Unauthorized Access';
    exit;
}

// Agar login sahi hai toh Key generate karo
$key = "HAMMAD-" . strtoupper(substr(md5(time()), 0, 12));
echo $key;
?>
