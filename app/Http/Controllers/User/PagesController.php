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

    //get trang chủ
    public function getIndex()
    {

        $tinhThanhPhos=TinhThanhPho::all();
       /*  echo"<pre>";
        print_r($tinhThanhPhos);

        exit; */
        // dd($tinhThanhPhos);

        return view('user.pages.index',['tinhThanhPhos'=>$tinhThanhPhos]);
    }

    //get trang chi tiết    
    public function getDetail()
    {
        return view('user.pages.detail');
    }
    
    //get danh sách   
    public function getList()
    {
        return view('user.pages.list');
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
                redirect()->route('home');
            }
            else
            return redirect()->back()->withErrors(['errUser'=>'Đăng ký thất bại']);
        }
        catch (Exception $e) {

        }
    }
    
    // Ajax
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
