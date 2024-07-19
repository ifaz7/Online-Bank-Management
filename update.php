<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "iwt");

if (!$conn){
    die("Connection Failed!" . mysqli_connect_error());
}

    $id=$_GET['updateid'];


$sql= "SELECT * from new_users where id = $id";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
            $id = $row['id']; 
            $firstname= $row['firstname'];
            $lastname= $row['lastname'];
            $homeadd= $row['homeadd'];
            $phone= $row['phone'];
            $email= $row['email'];
            $password= $row['password'];

if (isset($_POST['update']))
{
    $firstname     = $_POST['fn'];
    $lastname     = $_POST['ln'];
    $homeadd   = $_POST['hadd'];
    $phone    = $_POST['num'];
    $email   = $_POST['mail'];
    $password    = $_POST['psw'];
    
    $sql1 = "UPDATE new_users set id=$id, fn ='$firstname', ln='$lastname', hadd= '$homeadd', num ='$phone', mail ='$email', psw='$password' where id=$id";

    $result1 = mysqli_query($conn, $sql1);
        
    if($result1)
    {
        echo "User upated created";
        header('location:profile.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
    
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600;700&display=swap" rel="stylesheet"> 
        <title>State Bank of SriLanka | Homepage</title>
    <link rel="icon" type="image/x-icon" href="img/sbslogo.png"></link>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Reg.css">

    </head>
    <body>
        <div class="nav-position" style="position: sticky; top: 0;">
         <div>
            <img class="logoimg" src="img/SBS.png" alt="logo" ></img>
        </div> 
             <div class="nav" style="background-color: #bebebe;">
             <ul>
              <li class="logo" href="home.html"> State Bank of SriLanka </li>
              <div class="topnav">
                <li><a class="active" href="home.html"> Home </a></li>
                <li><a href="moneytransfer.html"> Money-Transfer </a></li>
                <li><a href="loan.html"> Apply Loan </a></li>
                <li><a href="paybills.html"> Pay Bills </a></li>
                <li><a href="about.html"> About Us </a></li>
				<li><a href="help.html">Help</a></li>
                </div>
                <li class="searchbar">
                  <input type="text" placeholder="search">
                  <label class="search-icon">
                      <span type="submit">&#128269;</span>
                  </label>
              </li>
              <li >
                  <button class="login-button"><a href="login.html" style="text-decoration: none;">Login</a></button>
              </li>
			  <li >
                  <button class="signup"><a href="signup.html">Sign Up</a></button>
              </li>
             </ul>
             </div>
        </div>
            <div class="reg-container">
                 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                    <div class="reg-form">
                        <label for="fn"><b>First name</b></label> 
                        <input type="text" placeholder="First Name" name="fn" id="fn" value="<?php echo $firstname ?>" required autocomplete="off">
                        <br>
                        <label for="ln"><b>Last name</b></label> 
                        <input type="text" placeholder="Last Name" name="ln" id="ln" value="<?php echo $lastname ?>" required autocomplete="off">
                        <br>
                        <label for="hadd"><b>Home Address</b></label> 
                        <input type="text" placeholder="Home Address" name="hadd" id="hadd" value="<?php echo $homeadd  ?>" required autocomplete="off">
                        <br>
                        <label for="num"><b>Phone Number</b></label> 
                        <input type="tel" placeholder="Phone Number" name="num" id="num" value="<?php echo $phone ?>" required autocomplete="off"> 
                        <br>
                        <label for="mail"><b>Email</b></label> 
                        <input type="email" placeholder="email address" name="mail" id="mail" value="<?php echo $email ?>" requiredautocomplete="off">
                        <br>
                        <label for="psw"><b>Password</b></label> 
                        <input type="password" placeholder="Enter Password" name="psw" id="psw" value="<?php echo $password ?>" required autocomplete="off">
                        <br>
                        <br>
                        <button type="submit" class="registerbtn" name="update">Update</button>
                    </div>
                 </form>
            </div>
            </div>
            <div style="border-bottom: 1px solid gray" ></div>

            <div class="footer">
                 <div class="logo">
                     <a href="#home"><img src="img/SBS.png" alt="Bank-logo"></img></a>
                 </div>
                 <div class="info">
                     <ul>
                         <li class="Name"><a href="/home.html">State Bank of SriLanka</a></li>
                         <li><a href="#map">&#128205; SriLanka</a></li>
                         <li><a href="#phone">&phone; +94 11 5978224</a></li>
                         <li><a href="#web">&#127760; www.sbs.lk</a></li>
                         <li><a href="mailto:support@sbs.com">&#9993;support@sbs.com</a></li>
                     </ul>
                 </div>
             </div>
             <div style="border-bottom: 1px solid gray" ></div>
              <div class="lowfoot">
                     <div class="contact">
                         <p>Connect With Us</p>
                         <ul>
                             <li><a href="https://www.facebook.com/worldbank/photos/" target="_blank" style="text-decoration: none;"><i class="fa fa-facebook"></i>FaceBook/StateBankOfSriLanka</a></li><br>
                             <li><a href="https://twitter.com/wbg_gov?lang=en" target="_blank" style="text-decoration: none;";><i class="fa fa-twitter"></i>Twitter/StateBankOfSriLanka</a></li><br>
                             <li><a href="https://www.youtube.com/worldbank" target="_blank" style="text-decoration: none";><i class="fa fa-youtube"></i>Youtube/StateBankOfSriLanka</a></li><br>
                             <li><a href="https://www.linkedin.com/company/the-world-banks" target="_blank" style="text-decoration: none";><i class="fa fa-linkedin"></i>Linkedin/StateBankOfSriLanka</a></li><br>
                         </ul>
                     </div>
                  <div class="quickcontact">
                     <p>Quick Contact</p>
                     <form method="post" action="comments.php">
                         <input type="text" name="Name" placeholder="Name" autocomplete="off">
                         <input type="email" name="Email" placeholder="Email" autocomplete="off">
                         <input type="text" name="Subject" placeholder="Subject" autocomplete="off">
                         <input type= "text" name="Message" placeholder="Message" class="message" autocomplete="off">
                         <button name="submit">SUBMIT</button>
                     </form>
                 </div>
                 
             </div>
             <div class="copyright" style="background-color: #bebebe; border-top: solid black;">
             <div style="border-bottom: 1px solid gray" ></div>
             <p style="text-align: center; color: grey;">&copy; Copyright 2023| State Bank of Sri Lanka </p>
             <div style="border-bottom: 1px solid gray" ></div>
             </div>
         </body>
     </html>