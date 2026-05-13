<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    // Menampilkan seluruh antrean kendaraan (Read)
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraans'));
    }

    // Menampilkan halaman form tambah data
    public function create()
    {
        return view('kendaraan.create');
    }

    // Menyimpan data ke database (Create)
    public function store(Request $request)
    {
        // Validasi sederhana (Wajib diisi sesuai soal)
        $request->validate([
            'plat_nomor' => 'required',
            'nama_pemilik' => 'required',
            'merk_kendaraan' => 'required',
            'keluhan' => 'required',
        ]);

        // Simpan data menggunakan Mass Assignment
        Kendaraan::create($request->all());

        // Redirect kembali ke halaman Daftar Servis
        return redirect()->route('kendaraan.index');
    }
}