@extends('layouts.app')

@section('title', 'Pengelolaan Mahasiswa')

@section('content')
<div class="fade-in">

    <h3 class="fw-bold mb-4">Daftar Mahasiswa Terdaftar</h3>
    <p class="text-muted mb-4">Berikut adalah data mahasiswa yang terdaftar pada Sistem Informasi Akademik.</p>

    <!-- Tabel mahasiswa -->
    <div class="table-responsive shadow-sm">
        <table class="table table-hover align-middle text-center">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Program Studi</th>
                    <th>Angkatan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $i => $mhs)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $mhs['nim'] }}</td>
                    <td>{{ $mhs['nama'] }}</td>
                    <td>{{ $mhs['prodi'] }}</td>
                    <td>{{ $mhs['angkatan'] }}</td>
                    <td>
                        <span class="badge {{ $mhs['status'] == 'Aktif' ? 'bg-success' : 'bg-secondary' }}">
                            {{ $mhs['status'] }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Statistik kecil -->
    <div class="mt-5">
        <h5 class="fw-bold mb-3">Statistik Mahasiswa</h5>
        <div class="row text-center">
            <div class="col-md-3">
                <div class="p-3 bg-light rounded shadow-sm">
                    <h4 class="fw-bold text-primary">3</h4>
                    <p class="mb-0 text-muted">Total Mahasiswa</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-light rounded shadow-sm">
                    <h4 class="fw-bold text-success">2</h4>
                    <p class="mb-0 text-muted">Status Aktif</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-light rounded shadow-sm">
                    <h4 class="fw-bold text-secondary">1</h4>
                    <p class="mb-0 text-muted">Nonaktif</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-light rounded shadow-sm">
                    <h4 class="fw-bold text-warning">2025</h4>
                    <p class="mb-0 text-muted">Angkatan Terbaru</p>
                </div>
            </div>
        </div>
    </div>
{{-- Tombol kembali ke dashboard --}}
<div class="text-center mt-4">
    <a href="{{ route('dashboard', ['username' => $username]) }}" class="btn btn-outline-primary px-4">
        ← Kembali ke Dashboard
    </a>
</div>

</div>
@endsection
