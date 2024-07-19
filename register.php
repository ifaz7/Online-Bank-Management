<?php

$conn = mysqli_connect("localhost", "root", "", "iwt");

if (!$conn){
    die("Connection Failed!" . mysqli_connect_error());
}

if (isset($_POST['create']))
{
    $firstname     = $_POST['fn'];
    $lastname     = $_POST['ln'];
    $homeadd   = $_POST['hadd'];
    $phone    = $_POST['num'];
    $email   = $_POST['mail'];
    $password    = $_POST['psw'];
    
    $sql = "INSERT INTO new_users (firstname, lastname, homeadd, phone, email, password) VALUES ('$firstname', '$lastname', '$homeadd', '$phone', '$email', '$password')";

    $result = mysqli_query($conn, $sql);
        
    if($result)
    {
        // echo "User successfully created";
        header('location:login.html');
    }
    else{
        die(mysqli_error($conn));
    }
}
    
mysqli_close($conn);

?>
