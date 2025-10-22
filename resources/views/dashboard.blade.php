@extends('layouts.app')

@section('title', 'Dashboard Mahasiswa')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card card-hover border-0">
                <div class="card-body bg-primary text-white rounded-3">
                    <h2 class="card-title fw-bold">Halo, {{ $username ?? 'Mahasiswa' }}!</h2>
                    <p class="card-text mb-0">Selamat datang di Sistem Informasi Akademik Kampus</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Tombol --}}
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="d-grid gap-2 d-md-flex">
                <a href="{{ route('profile', ['username' => $username]) }}"
                   class="btn btn-primary btn-lg px-4">
                   Lihat Profil
                </a>
                <a href="{{ route('pengelolaan', ['username' => $username]) }}"
                   class="btn btn-success btn-lg px-4">
                   Data Mahasiswa
                </a>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="card border-0 shadow-sm text-white" style="background: linear-gradient(135deg, #1e40af, #3b82f6);">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h6 class="card-title">Total Mahasiswa</h6>
                        <h3 class="fw-bold">120</h3>
                        <small>Terdaftar aktif</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card border-0 shadow-sm text-white" style="background: linear-gradient(135deg, #16a34a, #22c55e);">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h6 class="card-title">Aktif Kuliah</h6>
                        <h3 class="fw-bold">98</h3>
                        <small>Semester ini</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card border-0 shadow-sm text-white" style="background: linear-gradient(135deg, #f59e0b, #fbbf24);">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h6 class="card-title">Semester</h6>
                        <h3 class="fw-bold">Ganjil</h3>
                        <small>2025/2026</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card border-0 shadow-sm text-white" style="background: linear-gradient(135deg, #8b5cf6, #a855f7);">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h6 class="card-title">Program Studi</h6>
                        <h3 class="fw-bold">3</h3>
                        <small>Aktif</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Aktivitas Terbaru-->
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card card-hover border-0">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Aktivitas Terbaru</h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <div>
                                <strong>Rafli (TI-2024)</strong> mengunggah tugas PWEB
                                <small class="text-muted d-block">5 menit lalu</small>
                            </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div>
                                <strong>Raffel (SI-2025)</strong> melakukan pengisian KRS
                                <small class="text-muted d-block">1 jam lalu</small>
                            </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div>
                                <strong>Bayu (IF-2023)</strong> mengunggah UTS PWEB
                                <small class="text-muted d-block">2 jam lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-hover border-0">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Riwayat Login</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Nama</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Rafli Zulfikar</td>
                                    <td>{{ date('d M, H:i', strtotime('-5 minutes')) }}</td>
                                </tr>
                                <tr>
                                    <td>Raffel Prajadinata</td>
                                    <td>{{ date('d M, H:i', strtotime('-1 hour')) }}</td>
                                </tr>
                                <tr>
                                    <td>Bayu Aji</td>
                                    <td>{{ date('d M, H:i', strtotime('-2 hours')) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
