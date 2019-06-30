<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slide';

    public function getSanPham()
    {
        return $this->belongsTo('App\SanPham', 'id', 'id_sanpham');
    }
}