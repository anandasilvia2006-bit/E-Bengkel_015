@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <!-- Judul Halaman Daftar Servis (Poin 4) -->
        <h3>Daftar Antrean Kendaraan</h3>
        
        <!-- Tombol "Tambah Kendaraan" di atas tabel (Poin 4) -->
        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">Tambah Kendaraan</a>
    </div>

    <!-- Tabel HTML Bootstrap (Poin 4) -->
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Plat Nomor</th>
                <th>Nama Pemilik</th>
                <th>Merk Kendaraan</th>
                <th>Keluhan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kendaraans as $index => $k)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $k->plat_nomor }}</td>
                <td>{{ $k->nama_pemilik }}</td>
                <td>{{ $k->merk_kendaraan }}</td>
                <td>{{ $k->keluhan }}</td>
                <td>
                    <!-- Tombol Edit (Poin 5) -->
                    <a href="{{ route('kendaraan.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <!-- Fitur Hapus wajib menggunakan tag <form> dan @method('DELETE') (Poin 5) -->
                    <!-- Ditambahkan validasi pop-up konfirmasi Javascript (Poin 5) -->
                    <form action="{{ route('kendaraan.destroy', $k->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus kendaraan dari antrean?')">
                        @csrf
                        @method('DELETE') <!-- Method Spoofing untuk Delete -->
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection