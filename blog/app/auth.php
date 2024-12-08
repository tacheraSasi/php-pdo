<?php
require "app.php";
require "db.php";

class Auth extends Database{

    public function __construct(){}
    
    public static function user(){
        return $_SESSION['user'];
    }
    public static function comparePass($pass1,$pass2){
        if($pass1 == $pass2) return true;

        return false;
    }

    public static function login($email, $password){
        $sql = "SELECT * FROM users WHERE email = :email";
        $user = self::fetchOne($sql,["email"=>$email]);
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        if(self::comparePass($hashed_password,$user["password"])){
            $_SESSION["user"] = $user;
            return App::redirect("index.php");
        }
        return App::error("Something went wrong failed to login");
    }

    public static function register($username, $email, $password){
        $sql = "INSERT INTO users (username, email,password) VALUES (:name, :email ,:password)";
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $isRegistered = self::query($sql,['name'=> $username,'email'=> $email,'password'=> $hashed_password]);

        if($isRegistered != true){
            return App::error("Failed to register the user. Something went wrong");
        }
        return App::redirect('login.php');
    }
    public static function logout(){
        session_start();
        session_destroy();
        App::redirect("login.php");
    }



}