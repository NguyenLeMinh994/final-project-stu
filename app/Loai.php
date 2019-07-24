<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loai extends Model
{
    //
    protected $table = 'loai';

    public function getChildren()
    {
        return $this->hasMany('App\Loai', 'parent_id', 'id');
    }


    public function getSanPhams()
    {
        return $this->hasMany('App\SanPham', 'id_loai');
    }

    public function getPosts()
    {
        return $this->hasManyThrough('App\SanPham', 'App\Loai', 'parent_id', 'id_loai', 'id');
    }
}