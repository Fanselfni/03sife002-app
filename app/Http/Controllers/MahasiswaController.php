<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mahasiswa = [
            'nim' => '123719823',
            'nama' => 'Ilfan Setiawan',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email' => 'ilfansetiawan12@gmail.com',
            'status' => 'Aktif',
            ];

        return view('page.profile', compact('mahasiswa'));
    }
}
