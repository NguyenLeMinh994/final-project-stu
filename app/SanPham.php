<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    //
    protected $table = 'sanpham';

    public function getLoai()
    {
        return $this->belongsTo('App\Loai','id_loai','id');
    }

    public function getUser()
    {
        return $this->belongsTo('App\User','id_user');
    }

    public function getTinhThanhPho()
    {
        return $this->belongsTo('App\TinhThanhPho','id_tp','id');
    }

    public function getQuan()
    {
        return $this->belongsTo('App\Quan','id_quan','id');
    }

    public function getSlide()
    {
        return $this->belongsTo('App\Slide','id_sanpham');
    }
    
    public function getDanhSachHinhs()
    {
        return $this->hasMany('App\DanhSachHinh','id_sanpham','id');
    }
}
