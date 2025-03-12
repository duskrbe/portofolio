<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARBY PORTOFOLIO</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="<?php echo e(asset('js/script.js')); ?>" defer></script>
</head>
<body class="bg-gradient-to-br from-black via-gray-900 to-gray-800 text-gray-100">
    <header class="bg-gray-800 shadow-md py-6">
        <div class="container mx-auto text-center">
            
            <nav class="mt-4">
                <ul class="flex justify-center space-x-6">
                    <li><button onclick="navigateTo('about')" class="text-blue-500 hover:underline">About</button></li>
                    <li><button onclick="navigateTo('projects')" class="text-blue-500 hover:underline">Project</button></li>
                    <li><button onclick="navigateTo('contact')" class="text-blue-500 hover:underline">Contact</button></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section id="about" class="py-12 px-6 text-center">
        <h2 class="text-2xl font-semibold">Tentang Saya</h2>
        <p class="mt-4 text-gray-300">Halo, saya Arby Febrian Saputro, fresh graduate dari universitas komputer indonesia.</p>
    </section>
    
    <section id="projects" class="bg-gray-900 py-12 px-6 text-center">
        <h2 class="text-2xl font-semibold">Proyek Saya</h2>
        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6 container mx-auto max-w-4xl">
            <div class="bg-gray-700 p-6 rounded-lg shadow">
                <h3 class="text-xl font-medium">Bullience (Bangkit Capstone Project)</h3>
                <p class="mt-2 text-gray-700">Bullience is an application specifically designed to report incidents of bullying and violence.</p>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow">
                <h3 class="text-xl font-medium">Proyek 2</h3>
                <p class="mt-2 text-gray-700">Deskripsi singkat proyek.</p>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow">
                <h3 class="text-xl font-medium">Proyek 2</h3>
                <p class="mt-2 text-gray-700">Deskripsi singkat proyek.</p>
            </div>
        </div>
    </section>

    
    <section id="contact" class="py-12 px-6 text-center">
        <h2 class="text-2xl font-semibold">Kontak</h2>
        <p class="mt-4 text-gray-300">Email: arbyfebrians18@gmail.com</p>
        <p class="text-gray-300">LinkedIn: linkedin.com/in/arbyfebrians</p>
    </section>
    
    <footer class="bg-gray-900 text-gray-400 text-center py-6 mt-12">
        <p>&copy; 2025 Arby Febrian Saputro</p>
    </footer>
</body>
</html>
<?php /**PATH D:\Project\MyPortofolio\resources\views/homepage.blade.php ENDPATH**/ ?>