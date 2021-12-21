<html>
 <head>
  <title>YakWeide.de</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="/images/yakweide_logo_klein.png" />
   <title>YakWeide - Login</title>
 </head>
 <body>
   
 <nav>
   <div id="left">
      <img src="/images/yakweide_logo_klein.png" alt="Logo" height="50">
    </div>
   
    <div id="right">
      <button onclick="window.location.href = 'login.php';">Login/Register</button>
      <button onclick="window.location.href = 'account.php';">Account</button>
   </div>


   <div id="mid">
      <button onclick="window.location.href = 'https://yakweide.de/mail';">Mail</button>
      <button onclick="window.location.href = 'https://discord.yakweide.de/';">Discord Server</button>
      <button onclick="window.location.href = 'https://steam.yakweide.de/';">Steam Gruppe</button>
      <button onclick="window.location.href = 'https://watch2gether.yakweide.de/';">Watch2Gether</button>
      <button onclick="window.location.href = 'https://Thomas.yakweide.de/';">Thomas</button>
      <button onclick="window.location.href = 'https://Tonk.yakweide.de/';">Tonk</button>
      <button onclick="window.location.href = 'https://github.yakweide.de/';">Github</button>
   </div>
</nav>

<div id="page">   
    <h2>Login</h2>
    <form action="authorization.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
    <a href="signup.php">Registrieren</a>
</div>

<?php

?>

 </body>
</html>	