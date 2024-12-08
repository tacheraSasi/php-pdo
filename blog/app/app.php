<?php 
session_start();

// Initializes errors session variable as an array
$_SESSION["errors"] = [];

class App {
    public static function redirect(string $url, int $code = 302) {
        // Sends a redirect header
        header("Location: $url", true, $code);
        exit();
    }

    public static function error(string $message) {
        // Adds error message to the session errors array
        array_push($_SESSION["errors"], $message);
    }
}
