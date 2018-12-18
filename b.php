<?php
  include "./includes/header.php";
  include "./functions/login-functions.php";
  checkedIfLoggedIn();
?>

<h1>Page B</h1>
<h3><?php echo $_SESSION['username'];?></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


<a href="logout.php">Logout</a>