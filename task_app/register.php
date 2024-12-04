<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-neutral-100">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-lg">
            <h1 class="text-3xl font-bold text-center text-neutral-900">Task App - Register</h1>
            <div class="bg-white py-8 px-6 shadow rounded-lg sm:px-10">
                <form class="space-y-6" action="register.php" method="POST">
                    <div>
                        <label for="username" class="block text-sm font-medium text-neutral-900">Username</label>
                        <div class="mt-2">
                            <input type="text" name="username" id="username" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-neutral-900 outline outline-1 -outline-offset-1 outline-neutral-300 placeholder:text-neutral-400 focus:outline focus:outline-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-neutral-900">Email</label>
                        <div class="mt-2">
                            <input type="email" name="email" id="email" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-neutral-900 outline outline-1 -outline-offset-1 outline-neutral-300 placeholder:text-neutral-400 focus:outline focus:outline-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-neutral-900">Password</label>
                        <div class="mt-2">
                            <input type="password" name="password" id="password" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-neutral-900 outline outline-1 -outline-offset-1 outline-neutral-300 placeholder:text-neutral-400 focus:outline focus:outline-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                    </div>
                </form>
            </div>
            <p class="mt-10 text-center text-sm text-neutral-500">
                Already have an account?
                <a href="login.php" class="font-semibold text-indigo-600 hover:text-indigo-500">Sign in</a>
            </p>
        </div>
    </div>
</body>

</html>
