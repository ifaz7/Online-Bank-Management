<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "iwt");

if (!$conn) {
    die("Connection Failed!" . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $sql = "SELECT * FROM new_users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        // User login is successful
        $_SESSION['id'] = $row['id'];
        $_SESSION['mail'] = $row['email'];
        $_SESSION['user_id'] = $row['firstname'] . $row['lastname'];
        //echo $_SESSION['user_id'];
        header("Location: profile.php?email=" . $email);
        exit;
    } else {
        // User login failed

        // header('location:login.html');
        echo "<script>alert('Invalid User');</script>";
    }
}

mysqli_close($conn);
?>
