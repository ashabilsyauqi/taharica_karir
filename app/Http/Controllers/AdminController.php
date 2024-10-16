<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Fungsi untuk menampilkan halaman admin dashboard
    public function index()
    {
        return view('admin.dashboard'); // Pastikan Anda memiliki view untuk admin dashboard
    }
}
