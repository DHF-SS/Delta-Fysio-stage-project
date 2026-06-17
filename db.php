<?php

$conn = new mysqli("localhost", "root", "", "physio");

if($conn->connect_error){
    die("Database error: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>