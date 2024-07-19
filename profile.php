<html lang="en-US">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600;700&display=swap" rel="stylesheet"> 
    <title>State Bank of SriLanka | LOGIN</title>
    <link rel="icon" type="image/x-icon" href="img/sbslogo.png"></link>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="login.css">
    <style>
        .details{
            margin:7px;
            font-size:larger;

        }
        .signup {
             background-color: blue;
             border: none;
             color: white;
             opacity: .5;
             padding: 11px 32px;
             text-align: center;
             text-decoration: none;
             display: inline-block;
             font-size: 16px;
             margin: 4px 20px;
             cursor: pointer;
             border-radius: 5px;
             margin-right: 0;
        }

        .signup:hover{
            opacity: .8;
        }
        .containernew{
            padding:10px;
            margin-left:25px;
        }

        .buttons{
            display: flex;
            padding: 10px;
        }
        
        .buttons a{
            text-decoration:none;
            color:white;
        }

        </style>

    </head>
    <body>
        <div>
            <img class="logoimg" src="img/SBS.png" alt="logo" ></img>
        </div>
          <div class="nav">
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
                  <button class="login-button" ><a href="profile.php" style="text-decoration:none;">Profile</a></button>
              </li>
			  <li >
                  <button class="login-button"><a href="logout.php" style="text-decoration:none;">LogOut</a> </button>
              </li>
            </ul>
        </div>
<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "iwt");

if (!$conn) {
    die("Connection Failed!" . mysqli_connect_error());
}

if (isset($_GET['email'])) {
    $email = $_GET['email'];

    $sql = "SELECT * FROM new_users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $id = $row['id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $homeadd = $row['homeadd'];
        $phone = $row['phone'];
        $email = $row['email'];
        $password = $row['password'];
    }
}

mysqli_close($conn);
?>

<div class="containernew">
    <div class="details">
        User ID: <?php echo $row['id']; ?>
    </div>
    <div class="details">
        First Name: <?php echo $firstname; ?>
    </div>
    <div class="details">
        Last Name: <?php echo $lastname; ?>
    </div>
    <div class="details">
        Mobile Number: <?php echo $phone; ?>
    </div>
    <div class="details">
        Home Address: <?php echo $homeadd; ?>
    </div>
    <div class="details">
        Email: <?php echo $email; ?>
    </div>
    <div class="details">
        Password: <?php echo $password; ?>
    </div>
</div>

</div>
<div class="buttons" >
<button class="signup"><a href="update.php?updateid=<?php echo $id; ?>">Update</a></button>
<button class="signup" style="background-color: red;"><a href="delete.php?deleteid=<?php echo $id; ?>">Delete</a></button>
</div>
        <div class="foot-position" style="position: absolute; bottom: 0;">
        <div style="border-bottom: 1px solid gray" ></div>
         <div class="footer">
            <div class="logo">
                <a href="home.html"><img src="img/SBS.png" alt="Bank-logo"></img></a>
            </div>
            <div class="info">
                <ul>
                    <li class="Name"><a href="home.html">State Bank of SriLanka</a></li>
                    <li><a href="#map">&#128205; SriLanka</a></li>
                    <li><a href="#phone">&phone; +94 11 5978224</a></li>
                    <li><a href="#web">&#127760; www.sbs.lk</a></li>
                    <li><a href="mailto:support@sbs.com">&#9993;support@sbs.com</a></li>
                </ul>
            </div>
        </div>
        <div style="border-bottom: 1px solid gray" ></div>
         <div class="lowfoot" >
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
    </div>
    </body>
</html>