<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Slide;
use App\SanPham;

class SildeController extends Controller
{
    public function index()
    {
        $slideList = Slide::all();
        // $slideList = SanPham::find(2);
        // dd($slideList->getSlide);
        return view('admin.pages.slide', ['slideList' => $slideList]);
    }

    public function removeSlideByAjax($slideId)
    {
        $slide = Slide::find($slideId);
        if (!$slide) {
            return -1;
        } else {
            if ($slide->delete()) {
                return $slideId;
            }
        }
        return 'false';
    }


    public function updateStatusSlideByAjax($slideId)
    {
        $slide = Slide::find($slideId);
        if (!$slide) {
            return -1;
        } else {
            $slide->trangthai = $slide->trangthai == 1 ? 0 : 1;
            if ($slide->save()) {
                return $slideId;
            }
        }
        return 'false';
    }

    public function addSlideByAjax($postId)
    {
        $slide = Slide::where('id_sanpham', $postId)->first();
        if ($slide) {
            return -1;
        } else {
            $slide = new Slide;
            $slide->id_sanpham = $postId;
            if ($slide->save()) {
                return $slide->id;
            }
        }
        return 'false';
    }
}