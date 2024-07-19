<?php

$conn = mysqli_connect("localhost", "root", "", "iwt");

if (!$conn){
    die("Connection Failed!" . mysqli_connect_error());
}

if (isset($_POST['transfer']))
{
    
    $accnum     = $_POST['Account Number'];
    $accname     = $_POST['Account Name'];
    $amount   = $_POST['Transaction Amount'];
    $bank= $_POST['Bank Name'];
    
    
    $sql = "INSERT INTO Transaction (bank, accnum, accname, amount) VALUES ('$bank', '$accnum', '$accname', '$amount')";

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
