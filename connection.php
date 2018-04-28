<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$servername = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$database = substr($url["path"], 1);

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error) {
    echo substr($url["path"], 1);
    echo "Failed to connect to database!";
    die("Connection failed: ");
}
?>