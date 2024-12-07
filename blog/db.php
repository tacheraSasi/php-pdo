<?php
require '../parseEnv.php';
parseEnv(__DIR__ . '/.env');

# Retrieving environment variables
$host = getenv("DB_HOST");
$dbname = getenv("DB_NAME");
$username = getenv("DB_USERNAME");
$password = getenv("DB_PASSWORD");

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";


class DB
{
    private PDO $conn;
    //TODO:Will add a feature to automatic load credentials from the .env
    public function __construct(string $dsn, string $username, string $password, array $options = [])
    {
        try {
            $this->conn = new PDO($dsn, $username, $password, $options);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function query(string $sql, array $params = [])
    {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Something when wrong while running the query $sql " . $e->getMessage());
        }

    }

    public function fetchAll()
    {
    }

    public function fetchOne()
    {
    }

    /**
     * Fetch all results as objects of a specified class.
     */
    public function fetchObjects(string $sql, array $params = [], string $className): array
    {
        $stmt = $this->query($sql, $params);
        return $stmt->fetchAll(PDO::FETCH_CLASS, $className);
    }
}