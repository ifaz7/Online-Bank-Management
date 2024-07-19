<?php

session_start();

if(isset($_SESSION['user_id'])){

    echo "User ".$_SESSION['user_id']." Logged in";

}
else{
    echo "No user is Logged in";
}

?>