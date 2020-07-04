<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jawaban;
use App\Pertanyaan;

class JawabanController extends Controller
{
    //menampilkan jawaban untuk pertanyaan tertentu
    public function index($pertanyaan_id)
    {
        $jawaban = Jawaban::all()->where('pertanyaan_id', $pertanyaan_id);

        return view('jawaban.show', compact('jawaban'));
    }

    public function store(Request $request, $id)
    {

       /*
        $jawaban = new Jawaban;
        $jawaban->isi = $request->isi;
        $jawaban->save();
        return redirec('jawaban/{pertanyaan_id}');
        */
    }
}
