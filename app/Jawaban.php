<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Jawaban extends Model
{
    protected $table = 'table_jawaban';
    protected $fillable = ['isi'];
    
    public function pertanyaan()
    {
        return $this->belongsTo('App\Pertanyaan', 'pertanyaan_id');
    }


}
