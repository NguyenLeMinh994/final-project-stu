<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Quan;

class AjaxController extends Controller
{
    // Nguyễn Lê Minh Begin
    public function getQuansByAjax($idThanhPho)
    {
        
        $quansOfThanhPho=Quan::where('id_tp',$idThanhPho)->get();
        
        return response()->json($quansOfThanhPho);
    }

    // Nguyễn Lê Minh End
}
