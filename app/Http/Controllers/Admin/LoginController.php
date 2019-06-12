<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\User;

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
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $getInfo = Socialite::driver($provider)->user();
        $user = $this->createUser($getInfo, $provider);
        auth()->login($user);
        return redirect()->to('/');
    }

    function createUser($getInfo, $provider)
    {
        $user = User::where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $user = User::create([
                'hoten'             => $getInfo->name,
                'email'             => $getInfo->email,
                'email_verified_at' => now(),
                'provider'          => $provider,
                'provider_id'       => $getInfo->id,
                'remember_token'    => bcrypt(str_random(10)),
            ]);
        }
        return $user;
    }

    public function getLogout()
    {
        auth()->logout();
        return redirect('/');
    }
}
