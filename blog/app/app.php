<?php 
session_start();
$_SESSION["errors"] = [""=> ""];
class App{
    public static function redirect(string $url, int $code = 0, int $status = 0){
        header($url, true, $code);
    }

    public static function error(string $message){
       array_push($_SESSION["error"],$message);
    }
}