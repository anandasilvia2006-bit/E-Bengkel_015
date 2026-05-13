<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan; // <--- Pastikan ini ada di baris nomor 6 atau 7

class KendaraanController extends Controller
{
    public function index()
    {
        // Baris ini akan error jika tabel 'kendaraans' tidak ada di database
        $kendaraans = Kendaraan::all(); 
        return view('kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }
}