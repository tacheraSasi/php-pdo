<?php
require '../parseEnv.php';
parseEnv(__DIR__ . '/.env');

# Retrieving environment variables
$host = getenv("DB_HOST");
$dbname = getenv("DB_NAME");
$username = getenv("DB_USERNAME");
$password = getenv("DB_PASSWORD");

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";


class Database {
    private static ?PDO $connection = null;

    /**
     * Initialize the database connection.
     */
    public static function connect(string $dsn, string $username = '', string $password = '', array $options = []): void {
        try {
            self::$connection = new PDO($dsn, $username, $password, $options);
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable error handling
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    /**
     * Execute a query with optional parameters.
     */
    public static function query(string $sql, array $params = []): bool|PDOStatement {
        if (!self::$connection) {
            throw new Exception("Database not connected. Call Database::connect() first.");
        }

        try {
            $stmt = self::$connection->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }

    /**
     * Fetch all results as an associative array.
     */
    public static function fetchAll(string $sql, array $params = []): array {
        $stmt = self::query($sql, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Fetch a single row as an associative array.
     */
    public static function fetchOne(string $sql, array $params = []): array|false {
        $stmt = self::query($sql, $params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Fetch all results as objects of a specified class.
     */
    public static function fetchObjects(string $sql, array $params = [], string $className): array {
        $stmt = self::query($sql, $params);
        return $stmt->fetchAll(PDO::FETCH_CLASS, $className);
    }
}
