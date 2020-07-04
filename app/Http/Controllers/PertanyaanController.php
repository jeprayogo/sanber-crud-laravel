<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan_list = Pertanyaan::all();
        return view('pertanyaan.index', compact('pertanyaan_list'));
    }

    //menampilkan form tambah data pertanyaan
    public function create()
    {
        return view('pertanyaan.create');
    }

    //menyimpan data pertanyaan
    public function store(Request $request)
    {
        $pertanyaan = new Pertanyaan;
        $pertanyaan->judul = $request->judul;
        $pertanyaan->isi = $request->isi;
        $pertanyaan->save();
        return redirect('pertanyaan');
    }

    //menampilkan detail pertanyaan berserta jawaban
    public function show($id)
    {
        $pertanyaan = Pertanyaan::where('id',$id)->firstOrFail(); //mengambil semua data pertanyaan yg sudah terhubung ke data jawaban

        return view('pertanyaan.show', compact('pertanyaan'));
    }

    //menampilkan halaman edit berdasarkan id
    public function edit($id)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }
    
    //menangani proses update
    public function update(Request $request, $id)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);
        $pertanyaan->update($request->all());
        return redirect('pertanyaan');
    }

    public function destroy($id)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);
        $pertanyaan->delete();
        return redirect('pertanyaan'); 
    }
}
