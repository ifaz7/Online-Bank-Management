<?php

$conn = mysqli_connect("localhost", "root", "", "iwt" );

if (!$conn){
    die("Connection Failed!". mysqli_connect_error());
}

// $_SESSION = [];
session_start();

session_unset();
session_destroy();

header("Location: login.html");

?>
