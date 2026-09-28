<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Arsitektur Sistem</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-slate-100 font-sans min-h-screen flex flex-col justify-between">
    <header
        class="border-b border-slate-800 bg-slate-900/50 backdrop-blur px-6 py-4 flex flex-wrap justify-between items-center gap-4">
        <div class="flex items-center gap-2">
            <div class="w-3 h-3 rounded-full bg-emerald-500 animate-pulse"></div>
            <span class="font-mono text-sm tracking-wider text-slate-300 font-semibold">SYS_CONSOLE v1.0</span>
        </div>
        <nav class="flex items-center gap-4 sm:gap-6 text-sm font-medium">
            <a href="/" class="text-slate-400 hover:text-slate-200 transition">Dashboard</a>
            <a href="/about" class="text-blue-400 border-b-2 border-blue-400 pb-1">Sistem Info</a>
            <a href="/contact" class="text-slate-400 hover:text-slate-200 transition">Kontak Ops</a>
            <a href="/hello/Operator"
                class="text-slate-400 hover:text-emerald-400 transition flex items-center gap-1.5 font-mono text-xs">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                <span>Sesi Operator</span>
            </a>
            <a href="/welcome" class="text-slate-500 hover:text-slate-300 transition text-xs font-mono">
                Welcome Page
            </a>
        </nav>
    </header>

    <main class="max-w-4xl mx-auto w-full px-6 py-12">
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8 shadow-2xl space-y-6">
            <h1 class="text-xl font-bold text-slate-100">Spesifikasi Lingkungan & Misi Arsitektur</h1>
            <p class="text-slate-300 text-sm leading-relaxed border-l-2 border-blue-500 pl-4 bg-slate-950/40 py-2">
                "{{ $info['visi'] }}"
            </p>
            <div class="border-t border-slate-800 pt-6 space-y-3 font-mono text-xs">
                <div class="flex justify-between py-2 border-b border-slate-800/50">
                    <span class="text-slate-500">ENGINE FRAMEWORK</span>
                    <span class="text-slate-200 font-semibold">{{ $info['arsitektur'] }}</span>
                </div>
                <div class="flex justify-between py-2 border-b border-slate-800/50">
                    <span class="text-slate-500">DATABASE DRIVER</span>
                    <span class="text-slate-200 font-semibold">{{ $info['sistem_db'] }}</span>
                </div>
                <div class="flex justify-between py-2">
                    <span class="text-slate-500">LEAD DEVELOPER</span>
                    <span class="text-blue-400 font-semibold">{{ $info['pengembang'] }}</span>
                </div>
            </div>
        </div>
    </main>

    <footer class="border-t border-slate-800 text-center py-4 text-xs font-mono text-slate-500">
        Tugas Rutin 9 - Setup Framework Laravel &copy; 2026 Rapama Yahya Purba
    </footer>
</body>

</html>