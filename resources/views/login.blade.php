@extends('layouts.app')

@section('title', 'Login Sistem Akademik')
@section('body-class', 'auth-page')

@section('content')
<div class="auth-container">
    <div class="auth-card" style="width: 400px;">
        <div class="p-4">
            <div class="text-center mb-4">
                <img src="https://logos.ruangkosong.net/wp-content/uploads/2020/06/Lambang-Universitas-Jember-UNEJ-Ruang-Logo.png"
                     alt="Logo UNEJ" width="60" class="rounded-circle">
                <h4 class="fw-bold mt-3">Login Sistem</h4>
            </div>

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('dashboard.post') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password">
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2">Masuk</button>
            </form>

            <div class="text-center mt-3">
                <a href="{{ route('home') }}" class="text-decoration-none">← Kembali </a>
            </div>
        </div>
    </div>
</div>
@endsection
