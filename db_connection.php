<?php
$servername = "localhost";
$db_username = "root";
$password = "";
$dbname = "php_draft_db";


$conn = new mysqli(
    $servername,
    $db_username,
    $password,
    $dbname
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
