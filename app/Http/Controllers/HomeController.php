<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel tbl_masterac
        $data = DB::table('tbl_masterac')->get();

        // Kirim data ke view home.blade.php
        return view('home', [
            'title' => 'Grafik Page',
            'data' => $data
        ]);
    }
}
