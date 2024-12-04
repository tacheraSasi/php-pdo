<?php
require '../parseEnv.php';
parseEnv(__DIR__ . '/.env');

# Retrieving environment variables
$host = getenv("HOST");
$dbname = getenv("DBNAME");
$username = getenv("USERNAME");
$password = getenv("PASSWORD");

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, # Enabling exception handling for errors
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, # Fetching results as associative arrays
];
// echo $host;
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    // echo "Database connection established successfully!";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
