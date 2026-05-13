<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Opsional, tapi standar Laravel
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang digunakan oleh model ini.
     * Secara default Laravel akan menganggap tabelnya bernama 'kendaraans'.
     */
    protected $table = 'kendaraans';

    /**
     * Fitur Mass Assignment (Instruksi Soal Poin 2).
     * Kolom yang diizinkan untuk diisi secara massal.
     */
    protected $fillable = [
        'plat_nomor', 
        'nama_pemilik', 
        'merk_kendaraan', 
        'keluhan'
    ];

    /**
     * Karena soal meminta created_at & updated_at (Poin 1),
     * Laravel secara default sudah mengaktifkan $timestamps = true.
     */
    public $timestamps = true;
}