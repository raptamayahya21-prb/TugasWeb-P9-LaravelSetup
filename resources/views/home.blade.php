<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Console - Inventory System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-slate-100 font-sans min-h-screen flex flex-col justify-between">
    <!-- Header Navigation -->
    <header
        class="border-b border-slate-800 bg-slate-900/50 backdrop-blur px-6 py-4 flex flex-wrap justify-between items-center gap-4">
        <div class="flex items-center gap-2">
            <div class="w-3 h-3 rounded-full bg-emerald-500 animate-pulse"></div>
            <span class="font-mono text-sm tracking-wider text-slate-300 font-semibold">SYS_CONSOLE v1.0</span>
        </div>
        <nav class="flex items-center gap-4 sm:gap-6 text-sm font-medium">
            <a href="/" class="text-blue-400 border-b-2 border-blue-400 pb-1">Dashboard</a>
            <a href="/about" class="text-slate-400 hover:text-slate-200 transition">Sistem Info</a>
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

    <!-- Main Content Area -->
    <main class="max-w-4xl mx-auto w-full px-6 py-10 space-y-6">
        <!-- Status Banner -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8 shadow-2xl">
            <div
                class="flex flex-col md:flex-row justify-between items-start md:items-center border-b border-slate-800 pb-6 mb-6">
                <div>
                    <h1 class="text-2xl font-bold text-slate-100 tracking-tight">{{ $data['nama_sistem'] }}</h1>
                    <p class="text-slate-400 text-sm font-mono mt-1">ID Node: {{ $data['kode_node'] }}</p>
                </div>
                <span
                    class="mt-4 md:mt-0 px-3 py-1 bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 text-xs font-mono rounded-full font-medium">
                    STATUS: {{ $data['status'] }}
                </span>
            </div>

            <!-- Interaksi Dinamis: Form Input Uji Route Parameter -->
            <div class="mb-8 p-5 bg-slate-950/70 border border-slate-800 rounded-xl">
                <h3 class="text-xs uppercase font-mono tracking-wider text-slate-400 mb-2">⚡ Simulasi Interaktif Route
                    Parameter (/hello/{nama})</h3>
                <p class="text-xs text-slate-400 mb-4">Ketik nama Anda atau nama dosen untuk menguji transmisi parameter
                    URL secara real-time:</p>
                <form
                    onsubmit="event.preventDefault(); const val = document.getElementById('operatorName').value.trim(); if(val) window.location.href='/hello/'+encodeURIComponent(val);"
                    class="flex flex-wrap sm:flex-nowrap gap-3">
                    <input type="text" id="operatorName" placeholder="Masukkan nama (misal: Rapta, Dosen Penguji)..."
                        class="bg-slate-900 border border-slate-700 text-slate-100 text-sm rounded-lg px-4 py-2.5 w-full focus:outline-none focus:border-blue-500 font-mono"
                        required />
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-500 text-white text-xs font-mono font-semibold px-5 py-2.5 rounded-lg transition whitespace-nowrap">
                        Masuk Sesi &rarr;
                    </button>
                </form>
            </div>

            <h2 class="text-xs uppercase tracking-wider text-slate-400 font-mono mb-4">Modul Operasional Terdeteksi</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach($data['modul'] as $m)
                    <div
                        class="bg-slate-950/60 border border-slate-800/80 p-4 rounded-xl hover:border-slate-700 transition">
                        <p class="text-sm font-semibold text-slate-200">{{ $m['nama'] }}</p>
                        <p class="text-xs font-mono text-blue-400 mt-2">{{ $m['stok'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-800 text-center py-4 text-xs font-mono text-slate-500">
        Tugas Rutin 9 - Setup Framework Laravel &copy; 2026 Raptama Yahya Purba
    </footer>
</body>

</html>