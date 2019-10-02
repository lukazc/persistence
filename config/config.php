<?php

// Doctrine config
// Driver, database name, access credentials
// Switch out for db of your liking
$dbParams = [
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'dbname' => 'persistence',
    'user' => 'zac',
    'password' => 'persistence'
];

// Dev mode
$dev = true;