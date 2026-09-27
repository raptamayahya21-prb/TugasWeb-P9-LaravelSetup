@extends('layout')

@section('title', 'Tentang Pengembang')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="bg-indigo-600 px-8 py-6 text-white">
            <h1 class="text-2xl font-bold">Tentang Pengembang</h1>
            <p class="text-indigo-100 text-sm mt-1">Data identitas mahasiswa (data dinamis dikirim dari Controller).</p>
        </div>
        <div class="p-8">
            <dl class="divide-y divide-slate-100">
                @foreach($biodata as $label => $val)
                    <div class="py-4 flex justify-between items-center">
                        <dt class="text-sm font-semibold uppercase tracking-wider text-slate-500">{{ $label }}</dt>
                        <dd class="text-sm font-bold text-slate-800 bg-slate-50 px-3.5 py-1.5 rounded-lg border border-slate-100">{{ $val }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>
@endsection
