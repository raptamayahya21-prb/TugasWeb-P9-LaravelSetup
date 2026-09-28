<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            'nama_sistem' => 'Core Inventory Management System',
            'kode_node' => 'NODE-MEDAN-01',
            'status' => 'Operational / System Nominal',
            'modul' => [
                ['nama' => 'Pemasok & Supplier', 'stok' => '24 Rekanan Active'],
                ['nama' => 'Kategori Perangkat Hardwares', 'stok' => '150+ SKU Item'],
                ['nama' => 'Log Transaksi Masuk/Keluar', 'stok' => 'Real-time Audited']
            ]
        ];

        return view('home', compact('data'));
    }

    public function about()
    {
        $info = [
            'arsitektur' => 'Laravel Framework Core Engine (Laravel 11)',
            'sistem_db' => 'MySQL Database Server via PDO Driver (myproduct_db)',
            'pengembang' => 'Raptama Yahya Purba (Dev-ID: 2026-P9-001)',
            'visi' => 'Penyediaan platform manajemen aset komputasi yang efisien, terstruktur, dan tersinkronisasi presisi.'
        ];

        return view('about', compact('info'));
    }

    public function contact()
    {
        $kontak = [
            'divisi' => 'Technical Support & System Operation Center',
            'email' => 'raptamayahya@gmail.com',
            'telepon' => '+62 823-7412-3751',
            'lokasi' => 'Medan, Sumatera Utara'
        ];

        return view('contact', compact('kontak'));
    }

    public function hello($nama)
    {
        return view('hello', ['nama' => $nama]);
    }
}
