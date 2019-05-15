<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinhThanhPho extends Model
{
    //
    protected $table = 'thanhpho';

    public function getSanPhams()
    {
        return $this->hasMany('App\SanPham','id_sanpham');
    }

}
