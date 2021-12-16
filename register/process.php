<?php 
    include("../functions.php");

    //checking username and password input
    if (isset($_POST['username']) && isset($_POST['password'])&& isset($_POST['role'])) {

        $username =$_POST['username'];
        $password =$_POST['password'];
        $role =$_POST['role'];
        //prevent sql injection by escaping special characters
        // $username = $sqlconnection->real_escape_string($_POST['username']);
        // $password = $sqlconnection->real_escape_string($_POST['password']);
        // $role = $sqlconnection->real_escape_string($_POST['role']);
        //sql statement
        $sql = "INSERT INTO tbl_staff VALUES (null,'".$username."','".$password."','Online','".$role."')";
        $hola = $sqlconnection->query($sql);
    }
      
?>