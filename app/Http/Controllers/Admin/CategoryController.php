<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Loai;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhMucs = Loai::all();
        return view('admin.pages.category', ['danhMucs' => $danhMucs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhMucChas = Loai::where('parent_id', null)->get();
        return view('admin.pages.createcategory', ['danhMucChas' => $danhMucChas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // if ($request->sltParent != 0) {
        //     return redirect()->back()->withErrors(['errMenu' => 'Chỉ có 1 cấp']);
        // }
        $rules = [
            'txtTen' => 'required'
        ];
        $messages = [
            'txtTen.required' => 'Vui lòng nhập tên'
        ];
        $request->validate($rules, $messages);

        $danhMucCha = null;

        if (!empty($request->sltParent)) {
            $danhMucCha = Loai::findOrfail($request->sltParent);
        }

        if ($danhMucCha == null || $danhMucCha->parent_id == null) {
            $category = new Loai();
            $category->ten = $request->txtTen;
            if (!empty($request->sltParent)) {
                $category->parent_id = $request->sltParent;
            }
            if ($category->save()) {
                return redirect()->back()->with(['success' => 'Thêm thành công']);
            } else
                return redirect()->back()->withErrors(['errMenu' => 'Lưu dữ liệu thất bại']);
        } else {
            return redirect()->back()->withErrors(['errMenu' => 'Chỉ có 1 cấp']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $danhMucChas = Loai::where('parent_id', null)->get();
        foreach ($danhMucChas as $key => $category) {
            if ($category->id == $id) {
                unset($danhMucChas[$key]);
            }
        }

        $danhMuc = Loai::findOrfail($id);

        return view('admin.pages.updatecategory', ['danhMuc' => $danhMuc, 'danhMucChas' => $danhMucChas]);
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
            'txtTen' => 'required'
        ];
        $messages = [
            'txtTen.required' => 'Vui lòng nhập tên'
        ];

        $request->validate($rules, $messages);
        $danhMucCha = null;
        try {
            if (!empty($request->sltParent)) {
                $danhMucCha = Loai::findOrfail($request->sltParent);
            }

            if ($danhMucCha == null || $danhMucCha->parent_id == null) {
                $category = Loai::findOrfail($id);
                if (count($category->getChildren) <= 0) {
                    $category->ten = $request->txtTen;

                    if (!empty($request->sltParent)) {
                        $category->parent_id = $request->sltParent;
                    } else {
                        $category->parent_id = null;
                    }

                    if ($category->save()) {
                        return redirect()->back()->with(['success' => 'Cập nhật thành công']);
                    } else {
                        return redirect()->back()->withErrors(['errMenu' => 'Lưu dữ liệu thất bại']);
                    }
                }
                return redirect()->back()->withErrors(['errMenu' => 'Chỉ có 1 cấp']);
            } else {
                return redirect()->back()->withErrors(['errMenu' => 'Chỉ có 1 cấp']);
            }
        } catch (\Throwable $th) { }
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

    public function ajaxDestroy($id)
    {
        if (empty($id)) {
            return 'false';
        } else {
            $danhmuc = Loai::findOrfail($id);
            if (count($danhmuc->getChildren) > 0 || count($danhmuc->getSanPhams) > 0) {
                return 'false';
            } else {
                if ($danhmuc->delete())
                    return 'true';
                return 'false';
            }
        }
        return 'false';
    }

    public function ajaxCapNhatTrangThai($id)
    {
        if (empty($id)) {
            return 'false';
        } else {
            $danhmuc = Loai::findOrfail($id);
            if (count($danhmuc->getChildren) > 0 || count($danhmuc->getSanPhams) > 0) {
                return 'false';
            } else {
                $danhmuc->trangthai = ($danhmuc->trangthai == 1 ? '0' : '1');
                if ($danhmuc->save())
                    return 'true';
                return 'false';
            }
        }
        return 'false';
    }
}