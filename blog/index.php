<?php 
require 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT * FROM tasks WHERE user_id = :user_id ORDER BY created_at DESC");
$stmt->execute(['user_id' => $user_id]);
$tasks = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tasks</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-neutral-100">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-lg">
            <h1 class="text-3xl font-bold text-center text-neutral-900">My Tasks</h1>
            <div class="bg-white py-8 px-6 shadow rounded-lg sm:px-10">
                <h2 class="text-lg font-medium text-neutral-900 mb-4">Add a Task</h2>
                <form class="space-y-6" action="add_task.php" method="POST">
                    <div>
                        <label for="title" class="block text-sm font-medium text-neutral-900">Title</label>
                        <div class="mt-2">
                            <input type="text" name="title" id="title" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-neutral-900 outline outline-1 -outline-offset-1 outline-neutral-300 placeholder:text-neutral-400 focus:outline focus:outline-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-neutral-900">Description</label>
                        <div class="mt-2">
                            <textarea name="description" id="description" rows="3"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-neutral-900 outline outline-1 -outline-offset-1 outline-neutral-300 placeholder:text-neutral-400 focus:outline focus:outline-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add
                            Task</button>
                    </div>
                </form>
                <h2 class="text-lg font-medium text-neutral-900 mt-8">Your Tasks</h2>
                <ul class="mt-4 space-y-4">
                    <?php foreach($tasks as $task):?>
                    <li class="flex items-center justify-between bg-neutral-50 p-4 rounded-lg shadow">
                        <div>
                            <h3 class="font-medium text-neutral-900"><?=$task['title']?></h3>
                            <p class="text-sm text-neutral-500"><?=$task['description']?></p>
                        </div>
                        <div class="flex space-x-2">
                            <form action="update_task.php?id=<?=$task['id']?>" method="POST">
                                <button class="px-2 py-1 text-sm text-green-600">Complete</button>
                            </form>
                            <form action="delete_task.php?id=<?=$task['id']?>" method="POST">
                                <button class="px-2 py-1 text-sm text-red-600">Delete</button>
                            </form>
                        </div>
                    </li>
                    <?php endforeach?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
