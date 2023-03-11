<?php

session_name('ourapp');
session_start([
    'cookie_domain' => 'http://localhost:8000/',
    'cookie_path' => '/',
]);

$_SESSION['data'] = "Hello World";
echo $_SESSION['data'];