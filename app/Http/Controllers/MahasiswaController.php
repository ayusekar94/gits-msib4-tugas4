<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){
        // return view('mahasiswa.index', [
        //     'item' => DB::table('mahasiswas'),
        // ]); 
        $data = Mahasiswa::all();
        return view('mahasiswa.index',[
            'item' => $data
        ]); 
    }
}
