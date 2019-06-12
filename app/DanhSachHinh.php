<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhSachHinh extends Model
{
    //
    protected $table = 'danhsachhinh';

    public function getSanPham()
    {
        return $this->belongsTo('App\SanPham','id_sanpham','id');
    }

    public function getHinhs()
    {
        return $this->hasMany('App\DanhSachHinh','id_sanpham','id');
    }
}
