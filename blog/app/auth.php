<?php 
require_once "app.php";
require_once "db.php";

class Auth extends Database{
    public function __construct(){}

    public static function login($username, $password){}

    public static function register($username, $email, $password){
        $sql = "INSERT INTO users (username, email,password) VALUES (:name, :email ,:password)";
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $isRegistered = self::query($sql,['name'=> $username,'email'=> $email,'password'=> $hashed_password]);

        if($isRegistered != true){
            return App::error("Failed to register the user. Something went wrong");
        }
        return App::redirect('login.php');
    }
    public static function logout(){}



}