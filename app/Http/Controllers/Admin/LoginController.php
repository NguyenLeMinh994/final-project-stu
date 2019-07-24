<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function getLogin()
    {
        if (!Auth::check()) {
            return view('admin.pages.login');
        } else {
            return redirect()->route('user.home');
        }
    }

    public function postLogin(Request $request)
    {
        $rules = [
            'txtEmail' => 'required|email',
            'txtPassword' => 'required',
        ];
        $messages = [
            'txtEmail.required' => 'Vui lòng nhập email',
            'txtEmail.email' => 'Nhập email không đúng',
            'txtPassword.required' => 'Vui lòng nhập mật khẩu',
        ];
        $request->validate($rules, $messages);

        $login = Auth::attempt(['email' => $request->txtEmail, 'password' => $request->txtPassword]);
        if ($login) {
            $level = Auth::user()->quyen;
            switch ($level) {
                case 0:
                    return redirect('admin/');
                    break;
                case 1:
                    return redirect('user/');
                    break;
            }
        }

        return redirect()->back()->withErrors(['errUser' => 'Kiểm tra lại tài khoản']);
    }

    public function redirectToProvider($provider)
    {
        $a = Socialite::driver($provider)->redirect();;
        return $a;
    }

    public function handleProviderCallback($provider)
    {
        try {
            $getInfo = Socialite::driver($provider)->user();
        } catch (Exception $e) {
            return Redirect::to('auth/' . $provider);
        }

        $user = $this->findOrCreateUser($getInfo, $provider);
        if (!$user) {
            return redirect()->to('/dang-nhap')->withErrors(['err' => 'Tài khoản tồn tại']);
        }
        auth()->login($user);
        return redirect()->to('/');
        // return redirect()->back()->withErrors(['err'=>'Tài khoản tồn tại']);

    }

    function findOrCreateUser($getInfo, $provider)
    {
        $user = User::where('email', $getInfo->email)->first();
        if ($user) {
            if ($user->provider_id == $getInfo->id) {
                return $user;
            } elseif (!empty($user->password)) {
                return false;
            }
        }
        return User::create([
            'hoten'             => $getInfo->name,
            'email'             => $getInfo->email,
            'email_verified_at' => now(),
            'provider'          => $provider,
            'provider_id'       => $getInfo->id,
            'remember_token'    => bcrypt(str_random(10)),
        ]);
    }

    function myAccountPage($id)
    {
        $user = User::findOrfail($id);
        return view('admin.pages.myaccount', ['user' => $user]);
    }

    function updateAccountPage(Request $request, $id)
    {
        $rules = [
            'txtFullName' => 'required',
            'txtPhone'    => 'required|numeric|digits:10',
            'txtAddress'  => 'required',
        ];
        $messages = [
            'txtFullName.required' => 'Vui lòng nhập họ và tên',

            'txtPhone.required' => 'Vui lòng nhập số điện thoại',
            'txtPhone.numeric'  => 'Vui lòng nhập số',
            'txtPhone.digits'   => 'Số điện thoại tối đa 10 số phải là số nguyên',

            'txtAddress.required' => 'Vui lòng nhập địa chỉ',
        ];
        $request->validate($rules, $messages);
        $user = User::findOrfail($id);
        if ($user) {
            $user->hoten = $request->txtFullName;
            $user->dienthoai = $request->txtPhone;
            $user->diachi = $request->txtAddress;
            if ($user->save()) {
                return redirect()->back()->with(['success' => 'Cập nhật thành công']);
            }
            return redirect()->back()->withErrors(['err' => 'Lỗi cập nhật dữ liệu']);
        }
        return redirect()->back()->withErrors(['err' => 'Lỗi không truy cập dữ liệu']);
    }

    function changePassword($id)
    {
        $user = User::findOrfail($id);
        return view('admin.pages.changepassword', ['user' => $user]);
    }

    function updateNewPassword(Request $request, $id)
    {
        $rules = [
            'txtCurrentPassword' => 'required',
            'txtPassword' => 'required',
            'txtPasswordConfirmation' => 'same:txtPassword',
        ];
        $messages = [
            'txtCurrentPassword.required' => 'Vui lòng nhập mật khẩu',
            'txtPassword.required' => 'Vui lòng nhập mật khẩu mới',
            'txtPasswordConfirmation.same' => 'Mật khẩu mới không khớp',
        ];
        $request->validate($rules, $messages);

        $user = User::findOrfail($id);
        if ($user) {
            if (Hash::check($request->txtCurrentPassword, $user->password)) {
                $user->password = bcrypt($request->txtPassword);
                if ($user->save()) {
                    return redirect()->back()->with(['success' => 'Thay đổi mật khẩu thành công']);
                }
            }
            return redirect()->back()->withErrors(['err' => 'Mật khẩu không trùng khớp với tài khoản']);
        }
        return redirect()->back()->withErrors(['err' => 'Lỗi không truy cập dữ liệu']);
    }

    public function getLogout()
    {
        auth()->logout();
        return redirect('/');
    }
}