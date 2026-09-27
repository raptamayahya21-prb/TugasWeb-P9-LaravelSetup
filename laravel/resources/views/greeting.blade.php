@extends('layout')

@section('title', 'Bonus Parameter')

@section('content')
<div class="max-w-xl mx-auto text-center py-16 px-6 bg-white rounded-3xl shadow-sm border border-slate-200">
    <div class="inline-flex items-center justify-center w-20 h-20 bg-indigo-50 text-indigo-600 rounded-3xl text-4xl mb-6 shadow-inner">
        👋
    </div>
    <span class="inline-block bg-amber-100 text-amber-800 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-4">
        Bonus: Route Parameter (/hello/{nama})
    </span>
    <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-3">
        Halo, <span class="text-indigo-600 underline decoration-indigo-200 decoration-wavy">{{ $nama }}</span>!
    </h1>
    <p class="text-slate-600 max-w-md mx-auto text-sm leading-relaxed mb-8">
        Nilai parameter <strong><code>{{ $nama }}</code></strong> berhasil ditangkap secara dinamis dari URL oleh rute <code>/hello/{nama}</code> dan ditampilkan ke Blade view.
    </p>
    <div class="flex justify-center gap-3">
        <a href="{{ url('/hello/Budi') }}" class="text-xs bg-slate-100 hover:bg-slate-200 text-slate-700 px-3 py-1.5 rounded-lg font-semibold transition">Coba: /hello/Budi</a>
        <a href="{{ url('/hello/Siti') }}" class="text-xs bg-slate-100 hover:bg-slate-200 text-slate-700 px-3 py-1.5 rounded-lg font-semibold transition">Coba: /hello/Siti</a>
        <a href="{{ url('/hello/Dosen-Web') }}" class="text-xs bg-indigo-50 hover:bg-indigo-100 text-indigo-700 px-3 py-1.5 rounded-lg font-semibold transition">Coba: /hello/Dosen-Web</a>
    </div>
</div>
@endsection
