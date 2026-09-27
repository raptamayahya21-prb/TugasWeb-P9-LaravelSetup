<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    /**
     * Rute '/' - Menampilkan Katalog Produk Dinamis
     */
    public function home()
    {
        // Ambil produk dari database jika ada, jika kosong sediakan default array
        $dbProducts = Product::all();

        if ($dbProducts->isEmpty()) {
            $products = [
                [
                    'id' => 1,
                    'title' => 'Kemeja Putih Slim Fit + Rompi Pria',
                    'description' => 'Kemeja formal bahan katun premium adem dan nyaman digunakan seharian.',
                    'price' => 650000,
                    'stock' => 10,
                ],
                [
                    'id' => 2,
                    'title' => 'Sepatu Kulit Formal Oxford',
                    'description' => 'Sepatu kulit sapi asli dengan sol karet anti slip bergaya modern elegan.',
                    'price' => 450000,
                    'stock' => 7,
                ],
                [
                    'id' => 3,
                    'title' => 'Tas Ransel Laptop Waterproof',
                    'description' => 'Kapasitas 20L dengan slot charger USB dan kompartemen laptop 15.6 inch.',
                    'price' => 299000,
                    'stock' => 18,
                ]
            ];
        } else {
            $products = $dbProducts->toArray();
        }

        return view('home', compact('products'));
    }

    /**
     * Rute '/about' - Menampilkan Informasi Pengembang / Mahasiswa
     */
    public function about()
    {
        $biodata = [
            'nama' => 'Mahasiswa Web Development',
            'nim'  => '2026-P9-001',
            'kelas'=> 'Praktikum Web Pertemuan 9',
            'dosen'=> 'Adidtya Perdana, ST., M.KOM'
        ];

        return view('about', compact('biodata'));
    }

    /**
     * Rute '/contact' - Menampilkan Informasi Kontak
     */
    public function contact()
    {
        $contacts = [
            'email' => 'admin@myproduct.test',
            'phone' => '+62 812-3456-7890',
            'alamat'=> 'Laboratorium Komputer Kampus'
        ];

        return view('contact', compact('contacts'));
    }

    /**
     * BONUS: Route Parameter /hello/{nama}
     */
    public function greeting($nama)
    {
        return view('greeting', ['nama' => $nama]);
    }
}
