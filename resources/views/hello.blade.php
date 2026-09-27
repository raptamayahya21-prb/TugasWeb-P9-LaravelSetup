<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Auth - {{ $nama }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-slate-100 font-sans min-h-screen flex items-center justify-center p-6">
    <div class="bg-slate-900 border border-slate-800 p-8 rounded-2xl max-w-md w-full shadow-2xl text-center space-y-4">
        <div class="w-12 h-12 bg-emerald-500/10 border border-emerald-500/30 rounded-full flex items-center justify-center mx-auto text-emerald-400 font-mono font-bold text-xl">
            ✓
        </div>
        <h1 class="text-xl font-bold tracking-tight text-slate-100">Autentikasi Sesi Berhasil</h1>
        <p class="text-slate-400 text-sm">Selamat Datang, Operator <span class="text-blue-400 font-mono font-semibold">{{ $nama }}</span>. Akses Sistem Diberikan.</p>
        <div class="pt-4 border-t border-slate-800">
            <a href="/" class="text-xs text-slate-500 hover:text-slate-300 font-mono transition">Kembali ke Dashboard &rarr;</a>
        </div>
    </div>
</body>
</html>
