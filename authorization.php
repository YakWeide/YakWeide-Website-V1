<?php

class authorization {

    private $conn;
    private $servername = "localhost";
    //private $username = $_ENV['SECRET_DB_USER'];
    //private $password = $_ENV['SECRET_DB_PASS'];
    //private $dbname = $_ENV['SECRET_DB_NAME'];

    private $username = "yak";
    private $password = "Griesheim1234";
    private $dbname = "yakweide";


    function __construct() {
        include("DotEnv.php");
        $DotEnv = new DotEnv(".env");
        $DotEnv->load();
        echo getenv('SECRET_DB_NAME', true) . "<br>";
        echo getenv('SECRET_DB_PASS', true) . "<br>";
        echo getenv('SECRET_DB_USER', true) . "<br>";
    }
    
    private function openDatabase(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            echo "Connection failed: " . $this->conn->connect_error . "<br>";
            die("Connection failed: " . $this->conn->connect_error);
            return false;
        }
        return true;
    }

    private function closeDatabase(){
        $this->conn->close();
        return true;
    }

    //0 = error, 1 = failure, 2 = success
    public function checkUsernameAvailable($username) {
        if(!openDatabase()) return 0;
    }
    
}

?>