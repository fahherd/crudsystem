<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class siswaController extends Controller
{
    public function Main(){
    $data = DB::table('siswa')->get();
    // dd($data->all());
    return view('main', compact('data'));
    }
}
