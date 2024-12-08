<?php 
require_once "app.php";
require_once "db.php";

class Auth extends Database{
    public function __construct(){}

    public static function login($username, $password){}

    public static function register($username, $email, $password){
        $sql = "INSERT INTO users (username, email,password) VALUES (:name, :email ,:password)";
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        if (self::query($sql,['name'=> $username,'email'=> $email,'password'=> $hashed_password])){
            App::redirect('login.php');
        }
    }
    public static function logout(){}



}