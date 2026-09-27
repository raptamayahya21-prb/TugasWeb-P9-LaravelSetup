<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Product Apps') - Tugas P9</title>
    <!-- Google Font & Tailwind CSS CDN (Bonus Styling) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen antialiased">
    <!-- Navbar -->
    <nav class="bg-indigo-600 text-white shadow-md sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 py-3.5 flex justify-between items-center">
            <a href="{{ route('home') }}" class="font-extrabold text-xl tracking-tight flex items-center gap-2">
                🛍️ <span>MyProduct Apps</span>
            </a>
            <div class="flex items-center space-x-6 text-sm">
                <a href="{{ route('home') }}" class="hover:text-indigo-200 transition font-medium">Home</a>
                <a href="{{ route('about') }}" class="hover:text-indigo-200 transition font-medium">About</a>
                <a href="{{ route('contact') }}" class="hover:text-indigo-200 transition font-medium">Contact</a>
                <a href="{{ url('/hello/Mahasiswa') }}" class="text-amber-300 hover:text-amber-100 transition font-semibold">Bonus Route</a>
                <a href="{{ route('welcome') }}" class="text-indigo-200 hover:text-white transition font-medium">Welcome Page</a>
            </div>
        </div>
    </nav>

    <!-- Content Area -->
    <main class="max-w-6xl mx-auto px-4 py-8 flex-grow w-full">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-6 text-center text-sm border-t border-slate-800">
        <p>&copy; 2026 MyProduct Apps &mdash; Tugas Rutin 9 & Praktikum Filament</p>
    </footer>
</body>
</html>
