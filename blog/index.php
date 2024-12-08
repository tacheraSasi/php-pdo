<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScrolSpace - Explore Stunning Stories</title>
    <link rel="shortcut icon" href="./assets/images/icon.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-neutral-100 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex items-center justify-between px-6 py-4">
            <h1 class="flex gap-2 text-2xl font-bold text-neutral-900">
                <a href="./">
                    <img src="assets/images/icon.png" class="h-8 w-8">
                </a>
                ScrolSpace
            </h1>
            <nav class="hidden md:flex space-x-6">
                <a href="#latest" class="text-sm font-medium text-neutral-700 hover:text-indigo-600">Latest Posts</a>
                <a href="#about" class="text-sm font-medium text-neutral-700 hover:text-indigo-600">About</a>
                <a href="#contact" class="text-sm font-medium text-neutral-700 hover:text-indigo-600">Contact</a>
            </nav>
            <button class="md:hidden bg-neutral-900 text-white px-3 py-2 rounded focus:ring focus:ring-indigo-300">
                Menu
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-neutral-900 text-white">
        <div class="container mx-auto text-center px-6 py-20">
            <h2 class="text-4xl md:text-5xl font-bold">Discover Stunning Stories</h2>
            <p class="mt-4 text-neutral-300 text-lg">
                A place to explore insights, inspiration, and stunning content curated for you.
            </p>
            <a href="#latest"
                class="inline-block mt-6 px-6 py-3 bg-orange-400 text-white font-semibold rounded-md hover:bg-indigo-500 focus:ring focus:ring-indigo-300">
                Explore Posts
            </a>
        </div>
        <!-- Decorative Background -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
    </section>

    <!-- Latest Posts -->
    <section id="latest" class="py-16 bg-neutral-50">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold text-neutral-800 mb-8 text-center">Latest Posts</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Post Card -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Post image" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-lg font-semibold text-neutral-900">Post Title Here</h4>
                        <p class="mt-2 text-sm text-neutral-600">
                            A short description of the blog post that entices readers to click and read more.
                        </p>
                        <a href="#" class="mt-4 inline-block text-indigo-600 text-sm font-medium hover:underline">Read
                            More</a>
                    </div>
                </div>
                <!-- Add more Post Cards as needed -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Post image" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-lg font-semibold text-neutral-900">Another Blog Post</h4>
                        <p class="mt-2 text-sm text-neutral-600">
                            A captivating description to intrigue the audience about the post.
                        </p>
                        <a href="#" class="mt-4 inline-block text-indigo-600 text-sm font-medium hover:underline">Read
                            More</a>
                    </div>
                </div>
                <!-- Additional cards can follow the same format -->
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold text-neutral-800 mb-4">About ScrolSpace</h3>
            <p class="text-neutral-600 max-w-2xl mx-auto">
                ScrolSpace is your go-to destination for discovering stunning blog posts. Our mission is to bring
                together diverse voices and perspectives to inspire and inform our readers.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-neutral-50">
        <div class="container mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold text-neutral-800 mb-4">Get in Touch</h3>
            <p class="text-neutral-600 max-w-2xl mx-auto">
                Have feedback or inquiries? Reach out to us, and we'll get back to you soon!
            </p>
            <form action="#" method="POST" class="mt-8 max-w-xl mx-auto space-y-4">
                <input type="text" name="name" placeholder="Your Name" required
                    class="w-full px-4 py-3 border rounded-md text-neutral-900 placeholder-neutral-400 focus:ring-indigo-500 focus:border-indigo-500">
                <input type="email" name="email" placeholder="Your Email" required
                    class="w-full px-4 py-3 border rounded-md text-neutral-900 placeholder-neutral-400 focus:ring-indigo-500 focus:border-indigo-500">
                <textarea name="message" rows="4" placeholder="Your Message" required
                    class="w-full px-4 py-3 border rounded-md text-neutral-900 placeholder-neutral-400 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                <button type="submit"
                    class="w-full py-2 px-4 bg-neutral-900 text-white font-semibold rounded-md shadow hover:bg-indigo-500 focus:ring focus:ring-indigo-300">
                    Send Message
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-neutral-900 text-white py-6">
        <div class="container mx-auto text-center">
            <p class="text-sm">© 2024 ScrolSpace. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>