<?php
$servername = "localhost";
$username = "root";
$password = "Admin";
$database = "new";

$link = new mysqli($servername, $username, $password, $database);

if ($link->connect_error) {
    die("Connection failed:" . $link->connect_error);
} else {
    echo "Connected successfully";
}
?>