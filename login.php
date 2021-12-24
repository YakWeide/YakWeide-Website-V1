<?php
  include("siteSetup.php");
  $siteSetup = new siteSetup("YakWeide | Login/Register", "");
?>

<?php
  include("authorization.php");
  $authorization = new authorization();
?>
   
   <h2>Login</h2>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
    <a href="signup.php">Registrieren</a>
    <br>
<?php
  
  if (isset($_POST['username']) && isset($_POST['password'])){
    
    echo $authorization->checkUsernameAvailable($_POST['username']);
    echo "test";

  }

?>

<?php
   $siteSetup->printFooter();
?>
