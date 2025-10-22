<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class PageController extends Controller
{
    // HALAMAN UTAMA
    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    // PROSES LOGIN
    public function authenticate(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username wajib diisi!',
            'password.required' => 'Password wajib diisi!',
        ]);

        $username = strtolower(trim($request->input('username')));

        return redirect()->route('dashboard', ['username' => $username]);
    }

    // --- DASHBOARD ---
    public function dashboard(Request $request)
    {
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        return view('dashboard', compact('username'));
    }

    // --- PROFILE ---
    public function profile(Request $request)
    {
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $mahasiswa = [
            'rafli' => [
                'nama' => 'Rafli Zulfikar',
                'nim' => '242410102076',
                'prodi' => 'Teknologi Informasi',
                'role' => 'Mahasiswa',
            ],
            'raffel' => [
                'nama' => 'Raffel Prajadinata',
                'nim' => '252410101025',
                'prodi' => 'Sistem Informasi',
                'role' => 'Mahasiswa',
            ],
            'bayu' => [
                'nama' => 'Bayu Aji',
                'nim' => '232410103090',
                'prodi' => 'Informatika',
                'role' => 'Mahasiswa',
            ],
        ];

        $data = $mahasiswa[$username] ?? [
            'nama' => ucfirst($username) ?: 'User',
            'nim' => '-',
            'prodi' => '-',
            'role' => 'Tamu',
        ];

        return view('profile', compact('data', 'username'));
    }

    // --- PENGELOLAAN ---
    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $mahasiswa = [
            ['nim' => '242410102076', 'nama' => 'Rafli Zulfikar', 'prodi' => 'Teknologi Informasi', 'angkatan' => '2024', 'status' => 'Aktif'],
            ['nim' => '252410101025', 'nama' => 'Raffel Prajadinata', 'prodi' => 'Sistem Informasi', 'angkatan' => '2025', 'status' => 'Aktif'],
            ['nim' => '232410103090', 'nama' => 'Bayu Aji', 'prodi' => 'Informatika', 'angkatan' => '2023', 'status' => 'Nonaktif'],
        ];

        return view('pengelolaan', compact('mahasiswa', 'username'));
    }
}
