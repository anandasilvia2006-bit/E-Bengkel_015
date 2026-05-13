@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Daftar Antrean Kendaraan</h3>
        <!-- Tombol Tambah Kendaraan di atas tabel -->
        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">Tambah Kendaraan</a>
    </div>

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
                    <!-- Tombol untuk fitur Update & Delete nanti -->
                    <a href="{{ route('kendaraan.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kendaraan.destroy', $k->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection