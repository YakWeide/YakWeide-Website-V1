<?php

    
    if (isset($_POST['username']))
    {
        echo "Username: " . $_POST['username'];
    }
    echo "<br>";
    if (isset($_POST['password']))
    {
        echo "Password: " . $_POST['password'];
        echo "<br>";
        $sha256 = hash('sha256', $_POST['password']);
        echo "Password SHA-256: " . $sha256;
    }

    
?>