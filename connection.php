<?php
$servername = "localhost";
$username = "abdulazizwaleed";
$password = "";
$database = "book_store";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error) {
    echo "Failed to connect to database!";
    die("Connection failed: ");
}
?>