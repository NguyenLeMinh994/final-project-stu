<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DanhSachHinh;

class ImagesController extends Controller
{
    public function uploadImage($id)
    {
        return view('admin.pages.uploadimages', compact('id'));
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
        DanhSachHinh::find($id)->delete();
        $path = public_path('upload/images/' . $filename);
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }
}