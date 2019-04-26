<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silde extends Model
{
    protected $table = 'slide';
    
    public function getSanPham()
    {
        return $this->belongsTo('App\SanPham','id_sanpham');
    }
}
