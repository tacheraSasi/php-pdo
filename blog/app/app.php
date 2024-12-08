<?php 

class App{
    public static function redirect(string $url, int $code = 0, int $status = 0){
        header($url, true, $code);
    }
}