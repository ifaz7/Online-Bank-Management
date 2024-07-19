<?php

$conn =new mysqli("localhost", "root", "", "iwt" );

if (!$conn){
    die("Connection Failed!". mysqli_connect_error());
}
?>