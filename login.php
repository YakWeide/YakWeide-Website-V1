<?php
  include("siteSetup.php");
  $siteSetup = new siteSetup("YakWeide | Login/Register", "");
?>

<?php
  include("authorization.php");
  $authorization = new authorization();
?>
   
   <h2>Login</h2>
    <form action="authorization.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
    <a href="signup.php">Registrieren</a>

<?php
   $siteSetup->printFooter();
?>
