@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Kendaraan Baru</h3>
    <hr>
    <div class="card">
        <div class="card-body">
            <!-- Form untuk simpan data (Poin 4 soal) -->
            <form action="{{ route('kendaraan.store') }}" method="POST">
                @csrf <!-- Proteksi CSRF sesuai instruksi -->
                
                <div class="mb-3">
                    <label class="form-label">Plat Nomor</label>
                    <input type="text" name="plat_nomor" class="form-control" placeholder="Contoh: BK 1234 XX" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Pemilik</label>
                    <input type="text" name="nama_pemilik" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Merk Kendaraan</label>
                    <input type="text" name="merk_kendaraan" class="form-control" placeholder="Contoh: Honda, Yamaha, Toyota" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Keluhan</label>
                    <textarea name="keluhan" class="form-control" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection