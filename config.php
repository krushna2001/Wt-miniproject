<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "login_register";

$conn =  new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>