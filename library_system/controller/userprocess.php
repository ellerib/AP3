<?php

    include "/config/database.php";
    require_once "/model/user.php";

    session_start();

    if($_SERVER["REQUEST_METHOD"]=='POST'){
        if(isset($_POST['login'])){
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            $new_login = new User("", "", $email, $password, "");
            $new_login->login();

        }

        if(isset($_POST['register'])){
            $lastname = trim($_POST['lastname']);
            $firstname = trim($_POST['firstname']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $role = trim($_POST['role']);

            $new_register = new User($lastname, $firstname, $email, $password, $role);
            $new_register->verify_email();

            $new_register->register();
        }

    }    

?>