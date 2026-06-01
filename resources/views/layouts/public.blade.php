<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TITORA Links')</title>
    <meta name="description" content="@yield('description', '')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: radial-gradient(circle at top left, #1e1e2f, #0f0f1a);
            background-attachment: fixed;
            color: #ffffff;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }
    </style>
</head>
<body class="min-h-screen antialiased flex flex-col items-center py-12 px-4 selection:bg-indigo-500 selection:text-white">
    <main class="w-full max-w-lg mx-auto">
        @yield('content')
    </main>

    <footer class="mt-12 text-center text-sm text-gray-500 pb-8">
        <p>Powered by <a href="/" class="text-gray-400 hover:text-white transition">TITORA Links</a></p>
    </footer>
</body>
</html>
