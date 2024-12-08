<?php
require 'app/auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    Auth::register($username, $email, $password);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="./assets/images/icon.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-neutral-100">
    <!-- Main Container -->
    <div class="flex flex-col lg:flex-row bg-white shadow-md rounded-lg max-w-4xl overflow-hidden">
        <!-- Illustration Section -->
        <div class="flex items-center justify-center p-8 bg-neutral-50">
            <div class="flex items-center space-x-4">
                <div class="bg-purple-500 w-16 h-32 rounded-md"></div>
                <div class="bg-black w-12 h-20 rounded-md"></div>
                <div class="bg-yellow-400 w-12 h-24 rounded-md"></div>
                <div class="bg-orange-400 w-20 h-20 rounded-full"></div>
            </div>
        </div>

        <!-- Register Form Section -->
        <div class="p-8 w-full lg:w-[400px]">
            <h2 class="text-2xl font-bold text-neutral-800">Create an account</h2>
            <p class="mt-2 text-sm text-neutral-600">Join us to manage your tasks seamlessly.</p>
            <form action="register.php" method="POST" class="mt-6 space-y-4">
                <!-- Username Input -->
                <div>
                    <label for="username" class="block text-sm font-medium text-neutral-700">Username</label>
                    <input type="text" name="username" id="username" required
                        class="mt-1 block w-full px-4 py-2 border rounded-md text-neutral-900 placeholder-neutral-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-neutral-700">Email</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 block w-full px-4 py-2 border rounded-md text-neutral-900 placeholder-neutral-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-neutral-700">Password</label>
                    <input type="password" name="password" id="password" required
                        class="mt-1 block w-full px-4 py-2 border rounded-md text-neutral-900 placeholder-neutral-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <!-- Register Button -->
                <button type="submit"
                    class="w-full py-2 px-4 bg-neutral-900 text-white font-semibold rounded-md shadow hover:bg-indigo-500 focus:ring focus:ring-indigo-300">
                    Register
                </button>
            </form>
            <!-- Footer Text -->
            <p class="mt-6 text-center text-sm text-neutral-500">
                Already have an account?
                <a href="login.php" class="text-orange-400 font-medium hover:underline">Log in</a>
            </p>
        </div>
    </div>
</body>

</html>
