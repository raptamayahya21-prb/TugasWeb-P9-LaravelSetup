<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex items-center justify-center p-8">
    <div class="max-w-md w-full bg-white rounded-2xl shadow-sm border border-slate-200 p-8 text-center">
        <div class="text-5xl mb-4">👋</div>
        <h1 class="text-3xl font-extrabold text-slate-800 mb-2">Hello {{ $nama }}</h1>
        <p class="text-slate-500 text-sm">Halaman dinamis dengan route parameter <code>/hello/{nama}</code>.</p>
    </div>
</body>
</html>
