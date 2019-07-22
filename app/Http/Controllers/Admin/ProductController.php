<?php

namespace App\Http\Controllers\Admin;

use App\Loai;
use App\Quan;
use App\SanPham;
use App\TinhThanhPho;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $posts = SanPham::where('id_user', Auth::user()->id)->get();
        return view('admin.pages.products', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $thanhPhos   = TinhThanhPho::all();
        $danhMucChas = Loai::where('parent_id', null)->get();
        return view('admin.pages.createproduct', ['thanhPhos' => $thanhPhos, 'danhMucChas' => $danhMucChas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'txtTen'      => 'required',
            'txtNoiDung'  => 'required',
            'txtSoTang'   => 'required|integer|numeric|min:0',
            'txtDiaChi'   => 'required',
            'txtDienTich' => 'required|integer|numeric|min:0',
            'txtPhongNgu' => 'required|integer|numeric|min:0',
            'txtPhongTam' => 'required|integer|numeric|min:0',
            'txtGia'      => 'required|regex:/^[0-9]{1,3}(,[0-9]{3})*(\.[0-9])*$/|min:0',
            'txtKinhDo'   => 'required|numeric',
            'txtViDo'     => 'required|numeric',
            'sltDanhMuc'  => 'required',
            'sltThanhPho' => 'required',
            'sltQuan'     => 'required',
            'fileHinh'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
        $messages = [
            'txtTen.required'     => 'Vui lòng nhập tên',
            'txtNoiDung.required' => 'Vui lòng nhập nội dung',

            'txtSoTang.required' => 'Vui lòng nhập số tầng',
            'txtSoTang.integer'  => 'Số tầng phải là số nguyên',
            'txtSoTang.numeric'  => 'Số tầng phải là số',
            'txtSoTang.min'      => 'Số tầng phải là số dương',

            'txtDienTich.required' => 'Vui lòng nhập diện tích',
            'txtDienTich.integer'  => 'Diện tích nhập số nguyên',
            'txtDienTich.numeric'  => 'Diện tích nhập số',
            'txtDienTich.min'      => 'Diện tích phải là số dương',

            'txtDiaChi.required' => 'Vui lòng nhập địa chỉ',

            'txtPhongNgu.required' => 'Vui lòng nhập phòng ngủ',
            'txtPhongNgu.integer'  => 'Phòng ngủ nhập số nguyên',
            'txtPhongNgu.numeric'  => 'Phòng ngủ nhập số ',
            'txtPhongNgu.min'      => 'Phòng ngủ phải là số dương ',

            'txtPhongTam.required' => 'Vui lòng nhập phòng tắm',
            'txtPhongTam.integer'  => 'Phòng tắm nhập số nguyên',
            'txtPhongTam.numeric'  => 'Phòng tắm nhập số',
            'txtPhongTam.min'      => 'Phòng tắm phải là số dương',

            'txtGia.required' => 'Vui lòng nhập giá',
            'txtGia.regex'  => 'Giá nhập số',
            'txtGia.min'      => 'Giá phải là số dương',

            'txtKinhDo.required' => 'Vui lòng nhập kinh độ',
            'txtKinhDo.numeric'  => 'Kinh nhập số',

            'txtViDo.required' => 'Vui lòng nhập vĩ độ',
            'txtViDo.numeric'  => 'Vĩ độ nhập số',

            'sltDanhMuc.required'  => 'Vui lòng chọn danh mục',
            'sltThanhPho.required' => 'Vui lòng chọn thành phố',
            'sltQuan.required'     => 'Vui lòng chọn quận',
            'fileHinh.required'    => 'Vui lòng chọn file hình',
            'fileHinh.image'       => 'Đây không phải là hình',
            'fileHinh.mimes'       => 'Đuôi file hình là jpeg,png,jpg,gif,svg',
            'fileHinh.max'         => 'Hình có kích thước tối đa 2MB',
        ];
        $request->validate($rules, $messages);
        $imageName = null;
        if ($request->hasFile('fileHinh')) {
            $imageName = time() . '.' . $request->fileHinh->getClientOriginalExtension();
            $request->fileHinh->move(public_path('upload'), $imageName);
        }
        $post = new SanPham;
        $post->ten = $request->txtTen;
        $post->hinhdaidien = $imageName;
        $post->noidung = $request->txtNoiDung;
        $post->diachi = $request->txtDiaChi;
        $post->gia = $this->changeNumberToInteger($request->txtGia);
        $post->latitude = $request->txtViDo;
        $post->longitude = $request->txtKinhDo;
        $post->phongtam = $request->txtPhongTam;
        $post->phongngu = $request->txtPhongNgu;
        $post->sotang = $request->txtSoTang;
        $post->dientich = $request->txtDienTich;
        $post->id_tp = $request->sltThanhPho;
        $post->id_quan = $request->sltQuan;
        $post->id_loai = $request->sltDanhMuc;
        $post->id_user = Auth::user()->id;
        if ($post->save()) {
            return redirect()->back()->with(['success' => 'Thêm thành công']);
        }
        return redirect()->back()->withErrors(['errMenu' => 'Lưu dữ liệu thất bại']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thanhPhos   = TinhThanhPho::all();
        $danhMucChas = Loai::where('parent_id', null)->get();
        $post = SanPham::findOrfail($id);
        return view('admin.pages.updateproduct', ['post' => $post, 'thanhPhos' => $thanhPhos, 'danhMucChas' => $danhMucChas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'txtTen'      => 'required',
            'txtNoiDung'  => 'required',
            'txtSoTang'   => 'required|integer|numeric|min:0',
            'txtDiaChi'   => 'required',
            'txtDienTich' => 'required|integer|numeric|min:0',
            'txtPhongNgu' => 'required|integer|numeric|min:0',
            'txtPhongTam' => 'required|integer|numeric|min:0',
            'txtGia'      => 'required|regex:/^[0-9]{1,3}(,[0-9]{3})*(\.[0-9])*$/|min:0',
            'txtKinhDo'   => 'required|numeric',
            'txtViDo'     => 'required|numeric',
            'sltDanhMuc'  => 'required',
            'sltThanhPho' => 'required',
            'sltQuan'     => 'required',
        ];
        $messages = [
            'txtTen.required'     => 'Vui lòng nhập tên',
            'txtNoiDung.required' => 'Vui lòng nhập nội dung',

            'txtSoTang.required' => 'Vui lòng nhập số tầng',
            'txtSoTang.integer'  => 'Số tầng phải là số nguyên',
            'txtSoTang.numeric'  => 'Số tầng phải là số',
            'txtSoTang.min'      => 'Số tầng phải là số dương',

            'txtDienTich.required' => 'Vui lòng nhập diện tích',
            'txtDienTich.integer'  => 'Diện tích nhập số nguyên',
            'txtDienTich.numeric'  => 'Diện tích nhập số',
            'txtDienTich.min'      => 'Diện tích phải là số dương',

            'txtDiaChi.required' => 'Vui lòng nhập địa chỉ',

            'txtPhongNgu.required' => 'Vui lòng nhập phòng ngủ',
            'txtPhongNgu.integer'  => 'Phòng ngủ nhập số nguyên',
            'txtPhongNgu.numeric'  => 'Phòng ngủ nhập số ',
            'txtPhongNgu.min'      => 'Phòng ngủ phải là số dương ',

            'txtPhongTam.required' => 'Vui lòng nhập phòng tắm',
            'txtPhongTam.integer'  => 'Phòng tắm nhập số nguyên',
            'txtPhongTam.numeric'  => 'Phòng tắm nhập số',
            'txtPhongTam.min'      => 'Phòng tắm phải là số dương',

            'txtGia.required' => 'Vui lòng nhập giá',
            'txtGia.regex'  => 'Giá phải nhập số',
            'txtGia.min'      => 'Giá phải là số dương',

            'txtKinhDo.required' => 'Vui lòng nhập kinh độ',
            'txtKinhDo.numeric'  => 'Kinh nhập số',

            'txtViDo.required' => 'Vui lòng nhập vĩ độ',
            'txtViDo.numeric'  => 'Vĩ độ nhập số',

            'sltDanhMuc.required'  => 'Vui lòng chọn danh mục',
            'sltThanhPho.required' => 'Vui lòng chọn thành phố',
            'sltQuan.required'     => 'Vui lòng chọn quận',
        ];
        $checkUploadImage = false;

        if ($request->hasFile('fileHinh')) {
            $rules['fileHinh'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
            $messages['fileHinh.required'] = 'Vui lòng chọn file hình';
            $messages['fileHinh.image'] = 'Đây không phải là hình';
            $messages['fileHinh.mimes'] = 'Đuôi file hình là jpeg,png,jpg,gif,svg';

            $checkUploadImage = true;
        }
        $request->validate($rules, $messages);
        $post = SanPham::findOrfail($id);
        $post->ten = $request->txtTen;
        // cập nhật hình ảnh
        if ($request->hasFile('fileHinh') && $checkUploadImage) {
            $file_path = public_path('upload/' . $post->hinhdaidien);
            if (File::exists($file_path)) {
                if (File::delete($file_path)) {
                    $imageName = time() . '.' . $request->fileHinh->getClientOriginalExtension();
                    $request->fileHinh->move(public_path('upload'), $imageName);
                    $post->hinhdaidien = $imageName;
                }
            }
        }
        $post->noidung = $request->txtNoiDung;
        $post->diachi = $request->txtDiaChi;
        $post->gia = $this->changeNumberToInteger($request->txtGia);
        $post->latitude = $request->txtViDo;
        $post->longitude = $request->txtKinhDo;
        $post->phongtam = $request->txtPhongTam;
        $post->phongngu = $request->txtPhongNgu;
        $post->sotang = $request->txtSoTang;
        $post->dientich = $request->txtDienTich;
        $post->id_tp = $request->sltThanhPho;
        $post->id_quan = $request->sltQuan;
        $post->id_loai = $request->sltDanhMuc;
        $post->id_user = Auth::user()->id;
        if ($post->save()) {
            return redirect()->back()->with(['success' => 'Cập nhật thành công']);
        }
        return redirect()->back()->withErrors(['errMenu' => 'Lưu dữ liệu thất bại']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getPostList()
    {
        $posts = SanPham::orderBy('id', 'DESC')->get();
        return view('admin.pages.products', ['posts' => $posts]);
    }

    public function getQuansByAjax($idThanhPho)
    {
        $quansOfThanhPho = Quan::where('id_tp', $idThanhPho)->get();
        return response()->json($quansOfThanhPho);
    }

    public function deletePostByAjax($idPost)
    {
        $checkDel = 'false';
        $post = SanPham::findOrfail($idPost);
        $file_path = public_path('upload/' . $post->hinhdaidien);
        if (File::exists($file_path)) {
            if (File::delete($file_path)) {
                if ($post->delete()) {
                    $checkDel = 'true';
                }
            }
        }
        return $checkDel;
    }

    public function updateStatusByAjax($idPost)
    {
        $checkDel = 'false';
        $post = SanPham::findOrfail($idPost);
        $post->trangthai = $post->trangthai == 1 ? '0' : '1';
        if ($post->save()) {
            $checkDel = 'true';
        }
        return $checkDel;
    }

    public function changeNumberToInteger($number)
    {
        return intval(str_replace(",", "", $number));
    }
}