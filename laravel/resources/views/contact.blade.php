@extends('layout')

@section('title', 'Kontak')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="bg-indigo-600 px-8 py-6 text-white">
            <h1 class="text-2xl font-bold">Informasi Kontak</h1>
            <p class="text-indigo-100 text-sm mt-1">Data kontak dinamis yang dikirim dari controller ke view Blade.</p>
        </div>
        <div class="p-8 space-y-4">
            @foreach($contacts as $channel => $detail)
                <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl border border-slate-100 hover:border-indigo-200 transition">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-500">{{ $channel }}</span>
                    <span class="text-sm font-bold text-indigo-600">{{ $detail }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
