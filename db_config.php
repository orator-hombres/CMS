<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'cms_database');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
