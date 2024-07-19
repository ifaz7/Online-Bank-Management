<?php
$conn = mysqli_connect("localhost", "root", "", "iwt");

if (!$conn){
    die("Connection Failed!" . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
        
    $Name = ($_POST['Name']);
    $Email = ($_POST['Email']);
    $Subject = ($_POST['Subject']);
    $Message = ($_POST['Message']);

    $sql = "INSERT INTO comments (name, email, subject, message) VALUES ('$Name','$Email','$Subject','$Message')";
    $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script> alert('Message Sent!'); </script>";
        } 
        else {
            echo "<script> alert('Error: " . mysqli_error($conn) . "'); </script>";
        }
    } 

header("Location: home.html");
mysqli_close($conn);

//  Function to validate and sanitize input
// function validateInput($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
// ?>
