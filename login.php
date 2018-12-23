<?php
  include "./includes/header.php";
  include "./functions/login-functions.php";
?>
<h1>Login Page</h1>
<form method="POST">
<input type="text" name="email" placeholder ="E-mail">
<br>
<input type="password" name="pwd" placeholder ="Password">
<br>
<button type="submit" name="submit">Login</button>
</form>

<?php


$_SESSION['username'] = $_POST['email'];
$_SESSION['password'] = $_POST['pwd'];

if(isset($_POST['submit'])){
  checkedIfLoggedIn();
  };
  

?>

</body>
</html>