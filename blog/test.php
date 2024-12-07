<?php
require '../parseEnv.php';
require_once'db.php';
parseEnv(__DIR__ . '/.env');

# Retrieving environment variables
$host = getenv("DB_HOST");
$dbname = getenv("DB_NAME");
$username = getenv("DB_USERNAME");
$password = getenv("DB_PASSWORD");

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";


Database::connect($dsn, $username, $password);

$sql = "SELECT * FROM users";
$users = Database::fetchAll($sql);
print_r($users);


$sql = "SELECT * FROM users WHERE id = :id";
$user = Database::fetchOne($sql, ['id' => 1]);
print_r($user);


$sql = "INSERT INTO users (username, email,password) VALUES (:name, :email ,:password)";
Database::query($sql, ['name' => 'John Doe', 'email' => 'john@example.com','password'=>password_hash("Iamagenuis", PASSWORD_BCRYPT)]);


$sql = "UPDATE users SET email = :email WHERE id = :id";
Database::query($sql, ['email' => 'newemail@example.com', 'id' => 2]);

$sql = "DELETE FROM users WHERE id = :id";
Database::query($sql, ['id' => 10]);

