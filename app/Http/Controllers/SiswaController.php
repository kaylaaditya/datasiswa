<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function dt()
    {
        $data = DB::table('siswa')->select('id', 'nis', 'nama', 'jenis_kelamin', 'no_telepon', 'alamat', 'berat_badan', 'tinggi_badan');

        return $data->get();
    }
}
