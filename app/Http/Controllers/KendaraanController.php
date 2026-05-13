<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    /**
     * Halaman Daftar Servis: Menampilkan seluruh antrean kendaraan (Read).
     * Sesuai instruksi poin 4.
     */
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraans'));
    }

    /**
     * Halaman Tambah Data: Menampilkan form input kendaraan baru.
     * Sesuai instruksi poin 4.
     */
    public function create()
    {
        return view('kendaraan.create');
    }

    /**
     * Menyimpan data baru ke database (Create).
     * Menggunakan proteksi Mass Assignment dan redirect ke Daftar Servis.
     * Sesuai instruksi poin 4.
     */
    public function store(Request $request)
    {
        $request->validate([
            'plat_nomor' => 'required',
            'nama_pemilik' => 'required',
            'merk_kendaraan' => 'required',
            'keluhan' => 'required',
        ]);

        // Simpan data menggunakan Mass Assignment (Poin 2 & 4)
        Kendaraan::create($request->all());

        // Redirect kembali ke halaman Daftar Servis (Poin 4)
        return redirect()->route('kendaraan.index');
    }

    /**
     * Fitur Edit: Menampilkan form yang sudah terisi otomatis dengan data lama.
     * Sesuai instruksi poin 5.
     */
    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraan.edit', compact('kendaraan'));
    }

    /**
     * Menyimpan perubahan data ke database (Update).
     * Menggunakan Method Spoofing (@method('PUT')) di sisi View.
     * Sesuai instruksi poin 5.
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        $request->validate([
            'plat_nomor' => 'required',
            'nama_pemilik' => 'required',
            'merk_kendaraan' => 'required',
            'keluhan' => 'required',
        ]);

        $kendaraan->update($request->all());

        return redirect()->route('kendaraan.index');
    }

    /**
     * Fitur Hapus: Menghapus data kendaraan dari database.
     * Sesuai instruksi poin 5.
     */
    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();

        return redirect()->route('kendaraan.index');
    }
}