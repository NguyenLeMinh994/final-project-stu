<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Loai;
use App\TinhThanhPho;
use App\Quan;

class PagesController extends Controller
{
    public function __construct ()
    {
        // danh cho menu
        $loaiOfMenus=Loai::where('parent_id', 0)->get();
        view()->share('loaiOfMenus',$loaiOfMenus);
    }

    public function getIndex()
    {

        $tinhThanhPhos=TinhThanhPho::all();
        // dd($tinhThanhPhos);

        return view('user.pages.index',['tinhThanhPhos'=>$tinhThanhPhos]);
    }

    public function getDetail()
    {
        return view('user.pages.detail');
    }
    
    public function getList()
    {
        return view('user.pages.list');
    }

    public function getQuansByAjax($idThanhPho)
    {
        if($idThanhPho<10)
        {
            $idThanhPho="0".$idThanhPho;
        }
        $quansOfThanhPho=Quan::where('id_tinh',$idThanhPho)->get();
        
        return response()->json($quansOfThanhPho);
    }
}
