<?php

class authorization {

    private $conn = null;

    function __construct() {
        echo "authorization" . "<br>";
    }

    public function test() {
        return "test" . "<br>";
    }
    
    private function openDatabase(){
        $conn = new mysqli("...", "...", "...", "...");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error . "<br>");
            return false;
        }
        return true;
    }

    private function closeDatabase(){
        $conn->close();
        return true;
    }

    //0 = error, 1 = failure, 2 = success
    public function checkUsernameAvailable($username) {
        if(!openDatabase()) return 0;
        //if (isset($_POST['username']) && isset($_POST['password'])){
        if (isset($username)){
            //$sha256 = hash('sha256', $_POST['password']);
            $getId = "Select id from account where username = '" . $username . "'";
            $id_result = $conn->query($getId);
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