<?php

session_name('myapp');
session_start([
    'cookie_lifetime' => 60
]);

$_SESSION['name'] = 'Roby';

echo $_SESSION['name'];

// $_SESSION['counter'] = $_SESSION['counter'] ?? 0;
// $_SESSION['counter']++;