<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    protected $fillable = [
        'user_id', 'tanggal_kecelakaan', 'waktu_kecelakaan', 'jenis_kecelakaan', 'lokasi_kecelakaan'
    ];
}
