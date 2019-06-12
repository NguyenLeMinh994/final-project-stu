<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Loai;
use App\TinhThanhPho;
use App\Quan;
use App\Silde;
use App\SanPham;
use App\DanhSachHinh;

class PagesController extends Controller
{
    // Nguyễn Lê Minh Begin
    public function __construct ()
    {
        // Loại nhà
        $loaiOfMenus=Loai::where('parent_id', null)->get();
        view()->share('loaiOfMenus',$loaiOfMenus);

        //Trần Thanh Tuấn
        $Silde = Silde::all();
        view()->share('Silde',$Silde);
        $SanPham=SanPham::where('trangthai',1)->paginate(6);
        view()->share('SanPham',$SanPham);
        //$SanPham_new = SanPham::where('NewPosts',1)->get();
        //view()->share('SanPham_new',$SanPham_new);
        //$SanPham_highlights = SanPham::where('Highlights',1)->get();
        //view()->share('SanPham_highlights',$SanPham_highlights);
        $tinhThanhPhos=TinhThanhPho::all();
        view()->share('tinhThanhPhos',$tinhThanhPhos);       
    }

    //get trang chủ
    public function getIndex()
    {
        return view('user.pages.index');
    }

    //get trang chi tiết  //Trần Thanh Tuấn  
    public function getDetail($id)
    {
        $getDetail=SanPham::find($id);
        $sp_khac = sanpham::where('id_loai',$getDetail->id_loai)->paginate(6);
        return view('user.pages.detail',['getDetail'=>$getDetail, 'sp_khac'=>$sp_khac]);
    }
    
    //get danh sách //Trần Thanh Tuấn
    public function getList($id)
    {
        $listLoai=Loai::find($id);
        $listSanPham=SanPham::where('id_loai',$id)->paginate(6);
        return view('user.pages.list',['listLoai'=>$listLoai, 'listSanPham'=>$listSanPham]);
    }

    // trang dang ký
    public function getSignUp()
    {
        return view('user.pages.signup');
    }

    public function getLogin()
    {
        return view('user.pages.signup');
    }

    //Post
    public function postSignUp(Request $request)
    {
        $rules=[
            'txtFullName'=>'required',
            'txtEmail'=>'required|email|unique:users,email',
            'txtPhone'=>'required|numeric|digits:10',
            'txtPassword'=>'required',
            'txtPasswordConfirmation'=>'same:txtPassword',
        ];
        $messages=[
            'txtFullName.required'=>'Vui lòng nhập họ và tên',

            'txtEmail.required'=>'Vui lòng nhập email',
            'txtEmail.email'=>'Nhập email không đúng',
            'txtEmail.unique'=>'Email tồn tại',

            'txtPhone.required'=>'Vui lòng nhập số điện thoại',
            'txtPhone.numeric'=>'Vui lòng nhập số',
            'txtPhone.digits'=>'Số điện thoại tối đa 10 số phải là số nguyên',

            'txtPassword.required'=>'Vui lòng nhập mật khẩu',
            'txtPasswordConfirmation.same'=>'Mật khẩu không khớp ',
        ];

        $request->validate($rules,$messages);
        try {

            $user=new User;
            $user->hoten=$request->txtFullName;
            $user->dienthoai=$request->txtPhone;
            $user->email=$request->txtEmail;
            $user->diachi=$request->txtAddress;
            $user->password=bcrypt($request->txtPassword);
            $user->remember_token=bcrypt(str_random(10));
            if($user->save())
            {
                return redirect()->route('home');
            }
            else
            return redirect()->back()->withErrors(['errUser'=>'Đăng ký thất bại']);
        }
        catch (Exception $e) {

        }
    }

    // Nguyễn Lê Minh End

    //Trần Thanh Tuấn
    //get trang liên hệ 
    public function contact()
    {
        return view('user.pages.contact');
    }

    public function about()
    {
        return view('user.pages.about');
    }

    public function timkiem(Request $req)
    {
        $pruduct = SanPham::where('ten','like','%'.$req->key.'%')
                            ->orWhere('gia',$req->key)
                            ->get();
        return view('user.pages.timkiem',compact('pruduct'));
    }

    //Trần Thanh Tuấn END


    
}
