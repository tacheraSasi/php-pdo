<?php 
require_once "db.php";

class Auth extends Database{
    public function __construct(){}

    public function login($username, $password){}

    public function register($username, $email, $password){
        $sql = "INSERT INTO users (username, email,password) VALUES (:name, :email ,:password)";
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);;
        self::query($sql,['name'=> $username,'email'=> $email,'password'=> $hashed_password]);
    }
    public function logout(){}



}