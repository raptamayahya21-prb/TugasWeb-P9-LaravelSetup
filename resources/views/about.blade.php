<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen p-8">
    <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
        <h1 class="text-3xl font-extrabold text-indigo-600 mb-6 border-b pb-3">About Page</h1>
        <div class="space-y-3 mb-6 text-slate-600 leading-relaxed">
            @for ($i = 1; $i <= $x; $i++)
                <p class="p-3 bg-slate-50 rounded-lg border border-slate-100 text-sm">
                    <span class="font-bold text-indigo-500 mr-2">#{{ $i }}</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, autem.
                </p>
            @endfor
        </div>
        <div class="p-4 bg-indigo-50 rounded-xl text-indigo-800 text-sm font-semibold border border-indigo-100">
            Paragraf lorem telah di tampilkan sebanyak {{ $x }} kali.
        </div>
    </div>
</body>
</html>
