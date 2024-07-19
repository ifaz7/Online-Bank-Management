<?php

$conn =new mysqli("localhost", "root", "", "iwt" );

if (!$conn){
    die("Connection Failed!". mysqli_connect_error());
}
if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $sql="delete from new_users where id = $id";
    $result=mysqli_query($conn , $sql);
    if($result)
    {
    header('location:home.html');
    }
}

?>