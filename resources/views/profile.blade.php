@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body bg-primary text-white rounded-3">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($data['nama']) }}&background=random&color=fff&size=100"
                                 class="rounded-circle shadow" width="80" height="80" alt="avatar">
                        </div>
                        <div class="col">
                            <h2 class="fw-bold mb-1">{{ $data['nama'] }}</h2>
                            <p class="mb-0 opacity-90">{{ $data['role'] }} - {{ $data['prodi'] }}</p>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('dashboard', ['username' => $username]) }}"
                               class="btn btn-light btn-sm">
                               <i class="fas fa-arrow-left me-1"></i>Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="fas fa-user-circle me-2"></i>Informasi Pribadi</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label text-muted small mb-1">Username</label>
                            <div class="p-3 bg-light rounded-2">
                                <strong>{{ $username }}</strong>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-muted small mb-1">Nama Lengkap</label>
                            <div class="p-3 bg-light rounded-2">
                                <strong>{{ $data['nama'] }}</strong>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-muted small mb-1">NIM</label>
                            <div class="p-3 bg-light rounded-2">
                                <strong>{{ $data['nim'] }}</strong>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-muted small mb-1">Program Studi</label>
                            <div class="p-3 bg-light rounded-2">
                                <strong>{{ $data['prodi'] }}</strong>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-muted small mb-1">Status</label>
                            <div class="p-3 bg-light rounded-2">
                                <span class="badge bg-success fs-6">{{ $data['role'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0"><i class="fas fa-chart-bar me-2"></i>Statistik Akademik</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3 text-center">
                        <div class="col-6">
                            <div class="p-3 border rounded-3">
                                <i class="fas fa-book-open fa-2x text-primary mb-2"></i>
                                <h4 class="fw-bold text-primary">12</h4>
                                <small class="text-muted">Mata Kuliah</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border rounded-3">
                                <i class="fas fa-check-circle fa-2x text-success mb-2"></i>
                                <h4 class="fw-bold text-success">24</h4>
                                <small class="text-muted">SKS Max</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border rounded-3">
                                <i class="fas fa-clock fa-2x text-warning mb-2"></i>
                                <h4 class="fw-bold text-warning">23</h4>
                                <small class="text-muted">SKS Tempuh</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border rounded-3">
                                <i class="fas fa-star fa-2x text-info mb-2"></i>
                                <h4 class="fw-bold text-info">3.75</h4>
                                <small class="text-muted">IPK</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0"><i class="fas fa-history me-2"></i>Aktivitas Terbaru</h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <div class="bg-success rounded-circle p-2 me-3">

                            </div>
                            <div class="flex-grow-1">
                                <strong>Login ke Sistem</strong>
                                <small class="text-muted d-block">Hari ini, {{ date('H:i') }}</small>
                            </div>
                            <span class="badge bg-success">Baru</span>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="bg-primary rounded-circle p-2 me-3">

                            </div>
                            <div class="flex-grow-1">
                                <strong>Mengunggah Tugas PWEB</strong>
                                <small class="text-muted d-block">Kemarin, 14:30</small>
                            </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="bg-info rounded-circle p-2 me-3">

                            </div>
                            <div class="flex-grow-1">
                                <strong>Memperbarui Profil</strong>
                                <small class="text-muted d-block">2 hari yang lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
