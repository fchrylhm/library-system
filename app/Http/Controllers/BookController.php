<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
{
    $title = 'Daftar Buku';
    $description = 'Daftar buku yang tersedia di perpustakaan.';

    $books = [
        [
            'judul' => 'Pemrograman PHP',
            'penulis' => 'Budi Raharjo',
            'tahun' => 2022
        ],
        [
            'judul' => 'Laravel untuk Pemula',
            'penulis' => 'Andi Pratama',
            'tahun' => 2023
        ],
        [
            'judul' => 'Basis Data',
            'penulis' => 'Abdul Kadir',
            'tahun' => 2021
        ],
        [
            'judul' => 'Algoritma dan Pemrograman',
            'penulis' => 'Rosa A.S.',
            'tahun' => 2022
        ],
        [
            'judul' => 'Pemrograman Berbasis Web',
            'penulis' => 'Bambang Hariyanto',
            'tahun' => 2024
        ],
    ];

    $stock = 5;

    return view('books.index', compact(
        'title',
        'description',
        'books',
        'stock'
    ));
}

    public function show($id) {
        return "ID Buku : " . $id;
    }
}
