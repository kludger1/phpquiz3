<?php
  include "./includes/header.php";
  include "./functions/login-functions.php";
  checkedIfLoggedIn()
?>
    <h1>Hello <?php echo $_SESSION['username'];?></h1>
    <h2>You Are Logged In and Now Have Access To Every Page!</h2>

    
<a href="logout.php">Logout</a>
