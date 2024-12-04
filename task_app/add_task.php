<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $user_id = $_SESSION['user_id'];

    $stmt = $pdo->prepare("INSERT INTO tasks (user_id, title, description) VALUES (:user_id, :title, :description)");
    $stmt->execute(['user_id' => $user_id, 'title' => $title, 'description' => $description]);

    header('Location: index.php');
}
?>
