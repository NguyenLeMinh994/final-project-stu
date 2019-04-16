<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('user.pages.index');
    }

    public function getDetail()
    {
        return view('user.pages.detail');
    }
    
    public function getList()
    {
        return view('user.pages.list');
    }
}
