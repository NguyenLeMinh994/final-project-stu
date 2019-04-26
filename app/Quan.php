<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quan extends Model
{
    //
    protected $table = 'quan';

    public function getSanPhams()
    {
        return $this->hasMany('App\SanPham','id_sanpham');
    }
}
