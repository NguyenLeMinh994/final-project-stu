<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Slide;

class SildeController extends Controller
{
    public function index()
    {
        $slideList = Slide::all();
        return view('admin.pages.slide', ['slideList' => $slideList]);
    }

    public function addSlideByAjax($postId)
    {
        $slide = Slide::where('id_sanpham', $postId)->first();
        if ($slide) {
            return -1;
        } else {
            $slide = new Slide;
            $slide->id_sanpham = $postId;
            return $postId;
        }
        return 'false';
    }
}