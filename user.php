<?php

class User {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function authenticate() {
        global $connection;

        $hashedPassword = md5($this->password); // Note: Avoid using MD5 for real-world applications, use stronger hash functions

        $query = "SELECT * FROM users WHERE username='$this->username' AND password='$hashedPassword'";
        $result = mysqli_query($connection, $query);

        return mysqli_num_rows($result) == 1;
    }
}
