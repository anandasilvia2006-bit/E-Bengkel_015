@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Data Kendaraan</h3>
    <hr>
    <div class="card">
        <div class="card-body">
            <!-- Action mengarah ke route update -->
            <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Method Spoofing sesuai poin 5 soal -->
                
                <div class="mb-3">
                    <label class="form-label">Plat Nomor</label>
                    <input type="text" name="plat_nomor" value="{{ $kendaraan->plat_nomor }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Pemilik</label>
                    <input type="text" name="nama_pemilik" value="{{ $kendaraan->nama_pemilik }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Merk Kendaraan</label>
                    <input type="text" name="merk_kendaraan" value="{{ $kendaraan->merk_kendaraan }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Keluhan</label>
                    <textarea name="keluhan" class="form-control" rows="3" required>{{ $kendaraan->keluhan }}</textarea>
                </div>

                <button type="submit" class="btn btn-warning">Update Data</button>
                <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection