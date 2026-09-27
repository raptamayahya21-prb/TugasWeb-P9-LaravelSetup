<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen p-8">
    <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
        <h1 class="text-3xl font-extrabold text-indigo-600 mb-6 border-b pb-3">Contact Page</h1>
        <div class="space-y-3">
            @foreach ($data as $key => $value)
                <p class="p-4 bg-slate-50 rounded-xl border border-slate-100 font-medium text-slate-700">
                    {{ $key }}: {{ $value }}
                </p>
            @endforeach
        </div>
    </div>
</body>
</html>
