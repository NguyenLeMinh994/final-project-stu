<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DanhSachHinh;
use App\SanPham;

class ImagesController extends Controller
{
    public function indexImage($id)
    {
        $post = SanPham::find($id);

        return view('admin.pages.images', compact('post'));
    }

    public function uploadImage($id)
    {
        return view('admin.pages.uploadimages', compact('id'));
    }

    public function removeImage($id)
    {
        $image = DanhSachHinh::find($id);

        $link = $image->link;
        $path = public_path('upload/images/' . $link);
        if (file_exists($path)) {
            unlink($path);
            $image->delete();
        }
        return response()->json(['success' => $link]);
    }
    public function fileStore(Request $request)
    {
        $image = $request->file('file');
        $id = $request->input('id');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('upload/images'), $imageName);

        $imageUpload = new DanhSachHinh();
        $imageUpload->link = $imageName;
        $imageUpload->id_sanpham = $id;
        $imageUpload->save();
        return response()->json(['success' => $imageName]);
    }
    public function fileDestroy(Request $request, $id)
    {
        $filename =  $request->get('filename');
        DanhSachHinh::where('id', $id)->delete();
        $path = public_path('upload/images/' . $filename);
        if (file_exists($path)) {
            unlink($path);
        }
        return $id;
    }
}