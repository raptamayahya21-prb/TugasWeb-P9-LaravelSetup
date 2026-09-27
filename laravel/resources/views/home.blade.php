@extends('layout')

@section('title', 'Katalog Produk')

@section('content')
<div class="bg-gradient-to-r from-indigo-600 to-violet-700 rounded-3xl p-8 mb-10 text-white shadow-lg">
    <div class="inline-block bg-white/20 backdrop-blur px-3.5 py-1 rounded-full text-xs font-semibold uppercase tracking-wider mb-3">
        Tugas Rutin 9 &mdash; Setup Laravel
    </div>
    <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight mb-3">Katalog Produk Dinamis</h1>
    <p class="text-indigo-100 max-w-2xl leading-relaxed text-sm md:text-base">
        Halaman ini menampilkan data array dinamis dari Controller ke View Blade dengan styling modern Tailwind CSS CDN.
    </p>
</div>

<div class="flex items-center justify-between mb-6">
    <h2 class="text-2xl font-bold text-slate-800">Daftar Produk Unggulan</h2>
    <span class="text-sm font-semibold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full border border-indigo-100">
        Total: {{ count($products) }} Produk
    </span>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach ($products as $item)
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200 hover:shadow-lg transition-all duration-300 flex flex-col justify-between p-6">
            <div>
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-bold text-indigo-600 bg-indigo-50 px-2.5 py-1 rounded-lg">
                        ID: #{{ $item['id'] }}
                    </span>
                    <span class="text-xs font-medium text-slate-500 bg-slate-100 px-2.5 py-1 rounded-lg">
                        Stok: {{ $item['stock'] }}
                    </span>
                </div>
                <h3 class="font-bold text-lg text-slate-800 mb-2 leading-snug">{{ $item['title'] }}</h3>
                <p class="text-slate-600 text-sm mb-4 leading-relaxed">{{ $item['description'] }}</p>
            </div>
            <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Harga</span>
                <span class="text-indigo-600 font-extrabold text-xl">
                    Rp {{ number_format($item['price'], 0, ',', '.') }}
                </span>
            </div>
        </div>
    @endforeach
</div>
@endsection
