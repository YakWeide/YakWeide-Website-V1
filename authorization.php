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
        //echo getenv('SECRET_DB_NAME') . "<br>";
        //echo getenv('SECRET_DB_PASS') . "<br>"
        //echo getenv('SECRET_DB_USER') . "<br>"
    }
    
    private function openDatabase(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error . "<br>");
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
        //if (isset($_POST['username']) && isset($_POST['password'])){
        if (isset($username)){
            //$sha256 = hash('sha256', $_POST['password']);
            $getId = "Select id from account where username = '" . $username . "'";
            $id_result = $this->conn->query($getId);
            $id_array = mysqli_fetch_assoc($id_result);
            
            if(count($id_array) > 0){
                return 1;
            }else{
                return 2;
            }
        }
        closeDatabase();
    }
    
}

?>