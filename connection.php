<?php
// https://remotemysql.com/phpmyadmin/index.php
$servername = "remotemysql.com";
$username = "UMHtrZaysp";
$password = "3N3N6nsb7Z";
$database = "UMHtrZaysp";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// echo $_SERVER['HTTP_HOST'];
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?> 