<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    public function getUserList()
    {
        $userList=User::where('quyen', 1)->get();
        return view('admin.pages.customer',compact(['userList']));
    }
}