<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pertanyaan extends Model
{
    protected $table = 'table_pertanyaan';
    protected $fillable = ['judul', 'isi'];

    public function jawaban()
    {
        return $this->hasMany('App\Jawaban', 'pertanyaan_id');
    }

}
