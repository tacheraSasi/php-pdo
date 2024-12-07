<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task_id = $_POST['task_id'];
    $completed = $_POST['completed'];

    $stmt = $pdo->prepare("UPDATE tasks SET completed = :completed WHERE id = :id AND user_id = :user_id");
    $stmt->execute(['completed' => $completed, 'id' => $task_id, 'user_id' => $_SESSION['user_id']]);

    header('Location: index.php');
}
?>
