<?php

require_once 'db_config.php';
require_once 'user.php';
require_once 'content.php';

// Sample user authentication
$user = new User('john_doe', 'password123');
if ($user->authenticate()) {
    $content = new Content();
    $content->display();
} else {
    echo "Authentication failed!";
}
