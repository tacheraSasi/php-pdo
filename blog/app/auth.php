<?php
// Loading required files
require __DIR__ . '/app.php';
require __DIR__ . '/db.php';
require_once __DIR__ . '/../../parseEnv.php'; 

// Parsing environment variables
parseEnv(__DIR__ . '/../.env');

// Retrieving environment variables
$host = getenv("DB_HOST");
$dbname = getenv("DB_NAME");
$username = getenv("DB_USERNAME");
$password = getenv("DB_PASSWORD");

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

// Connecting to the database
Database::connect($dsn, $username, $password);

// Auth class extending the Database
class Auth extends Database {
    public function __construct() {}

    public static function user() {
        return $_SESSION['user'] ?? null; // Returns null if 'user' is not set
    }

    public static function comparePass($pass1, $pass2) {
        return $pass1 === $pass2;
    }

    public static function login($email, $password) {
        $sql = "SELECT * FROM users WHERE email = :email";
        $user = self::fetchOne($sql, ["email" => $email]);

        if ($user && password_verify($password, $user["password"])) {
            $_SESSION["user"] = $user;
            return App::redirect("index.php");
        }

        return App::error("Invalid credentials. Failed to login.");
    }

    public static function register($username, $email, $password) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO users (username, email, password) VALUES (:name, :email, :password)";
        $isRegistered = self::query($sql, [
            'name' => $username,
            'email' => $email,
            'password' => $hashed_password,
        ]);

        if (!$isRegistered) {
            return App::error("Failed to register the user. Something went wrong.");
        }

        return App::redirect('login.php');
    }

    public static function logout() {
        session_start();
        session_destroy();
        App::redirect("login.php");
    }

    public static function isLoggedIn() {
        return isset($_SESSION['user']);
    }
}
