@extends('layouts.app')

@section('title', 'Sistem Akademik Kampus')
@section('body-class', 'auth-page')

@section('content')
<div class="auth-container">
    <div class="auth-card" style="width: 500px;">
        <div class="text-center p-5">
            <img src="https://logos.ruangkosong.net/wp-content/uploads/2020/06/Lambang-Universitas-Jember-UNEJ-Ruang-Logo.png"
                 alt="Logo UNEJ" width="80" class="rounded-circle mb-3">
            <h1 class="fw-bold mb-2">Sistem Informasi Akademik</h1>
            <p class="text-muted mb-4">Universitas Jember</p>

            <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-5">
                <i class="fas fa-sign-in-alt me-2"></i>Masuk Sekarang
            </a>
        </div>
    </div>
</div>
@endsection
