<?php
function checkedIfLoggedIn(){
   $username = array_key_exists('username',$_SESSION) && !empty($_SESSION['username']);
   $password = array_key_exists('password',$_SESSION) && !empty($_SESSION['password']);
    if(!($username && $password)) {
        header('Location: login.php');
    } else {
        
       echo "You are logged in";
    //    logIn();
    }
}

// function logIn() {
//       header('Location: logged-in-page.php');
//       exit;

//     }
    