<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $primarykey = 'user_id';
    protected $fillable = ['user_id','nama_lengkap','photo'];
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
