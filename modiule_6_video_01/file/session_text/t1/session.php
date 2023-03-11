<?php
session_name('ourapp');
session_start([
    'cookie_domain' => 'http://localhost:8000/',
    'cookie_path' => '/',
]);
$_SESSION['data2'] = "Hello Earth";
echo $_SESSION['data2'];