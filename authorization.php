<?php

class authorization {

    private $conn;
    private $db_servername = "localhost";

    private $db_username;
    private $db_password;
    private $db_dbname;


    function __construct() {
        include("DotEnv.php");
        $DotEnv = new DotEnv(".env");
        $DotEnv->load();
        $this->db_username = getenv('SECRET_DB_USER', true);
        $this->db_password = getenv('SECRET_DB_PASS', true);
        $this->db_dbname = getenv('SECRET_DB_NAME', true);
    }
    
    public function openDatabase(){
        $this->conn = new mysqli($this->db_servername, $this->db_username, $this->db_password, $this->db_dbname);
        if ($this->conn->connect_error) {
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
        if (!$this->openDatabase()) {
            return 0;
        }
        if (isset($username)){
            $getId = "Select id from account where username = '" . $username . "'";
            $id_result = $this->conn->query($getId);
            $id_array = mysqli_fetch_assoc($id_result);
            
            if(count($id_array) > 0){
                return 1;
            }else{
                return 2;
            }
        }
        $this->closeDatabase();
    }
    
}

?>