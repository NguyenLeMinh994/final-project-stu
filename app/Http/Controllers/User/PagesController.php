<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

use App\User;
use App\TinhThanhPho;
use App\Quan;
use App\Slide;
use App\SanPham;
use App\DanhSachHinh;
use Carbon\Carbon;
use DB, Mail;
use App\Loai;


class PagesController extends Controller
{
    // Nguyễn Lê Minh Begin
    public function __construct()
    {
        // Loại nhà
        $loaiOfMenus = Loai::where('parent_id', null)->get();
        view()->share('loaiOfMenus', $loaiOfMenus);
    }

    public function getCityList()
    {
        return TinhThanhPho::all();
    }

    //get trang chủ
    public function getIndex()
    {
        $tinhThanhPhos = $this->getCityList();

        $slideList = Slide::where('trangthai', 1)->orderBy('created_at', 'desc')->limit(5)->get();
        $newPostList = SanPham::where('trangthai', 1)->orderBy('created_at', 'desc')->limit(9)->get();
        $featuredPosts = SanPham::where('trangthai', 1)->orderBy('views', 'desc')->limit(4)->get();

        return view('user.pages.index', ['newPostList' => $newPostList, 'tinhThanhPhos' => $tinhThanhPhos, 'slideList' => $slideList, 'featuredPosts' => $featuredPosts]);
    }

    //get trang chi tiết
    public function getDetail($id)
    {

        $getDetail = SanPham::find($id);
        // $countDate = Carbon::parse($getDetail->created_at)->diffInDays(Carbon::now());
        $getDetail->views = (int) ($getDetail->views + 1);
        $getDetail->save();
        $otherCategories = DB::select(
            'SELECT l2.*
            FROM loai l1,loai l2
            Where l1.parent_id=l2.parent_id and l1.id=?',
            [$getDetail->id_loai]
        );
        $randomPost = SanPham::where('trangthai', 1)->inRandomOrder()->limit(4)->get();
        // dd($randomPost);
        return view('user.pages.detail', compact(['getDetail', 'otherCategories', 'randomPost']));
    }
    //get danh sách
    public function getList($id)
    {
        $tinhThanhPhos = $this->getCityList();
        $parentIdList = Loai::where('parent_id', null)->pluck('id')->toArray();
        $postList = Loai::find($id)->getSanPhams()->where('trangthai', 1)->paginate(9);
        // dd($parentIdList);
        if (in_array($id, $parentIdList)) {
            $postList = Loai::find($id)->getPosts()->where('sanpham.trangthai', 1)->paginate(9);
        }
        // $postList = Loai::find($id)->getSanPhams;
        return view('user.pages.list', compact('postList', 'tinhThanhPhos'));
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
        $rules = [
            'txtFullName' => 'required',
            'txtEmail' => 'required|email|unique:users,email',

            'txtPhone' => 'required|numeric|digits:10',
            'txtAddress' => 'required',

            'txtPassword' => 'required',
            'txtPasswordConfirmation' => 'same:txtPassword',
        ];
        $messages = [
            'txtFullName.required' => 'Vui lòng nhập họ và tên',

            'txtEmail.required' => 'Vui lòng nhập email',
            'txtEmail.email' => 'Nhập email không đúng',
            'txtEmail.unique' => 'Email tồn tại',

            'txtPhone.required' => 'Vui lòng nhập số điện thoại',
            'txtPhone.numeric' => 'Vui lòng nhập số',
            'txtPhone.digits' => 'Số điện thoại tối đa 10 số phải là số nguyên',

            'txtAddress.required' => 'Vui lòng nhập địa chỉ',

            'txtPassword.required' => 'Vui lòng nhập mật khẩu',
            'txtPasswordConfirmation.same' => 'Mật khẩu không khớp ',
        ];

        $request->validate($rules, $messages);
        try {

            $user = new User;
            $user->hoten = $request->txtFullName;
            $user->dienthoai = $request->txtPhone;
            $user->email = $request->txtEmail;
            $user->diachi = $request->txtAddress;
            $user->password = bcrypt($request->txtPassword);
            $user->remember_token = bcrypt(str_random(10));
            if ($user->save()) {
                return redirect()->route('home');
            } else
                return redirect()->back()->withErrors(['errUser' => 'Đăng ký thất bại']);
        } catch (Exception $e) { }
    }

    // Nguyễn Lê Minh End

    //get trang liên hệ
    public function contact()
    {
        return view('user.pages.contact');
    }

    public function postContact(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'title' => 'required',
        ];
        $messages = [
            'name.required' => 'Vui lòng nhập họ và tên',

            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Nhập email không đúng',
            'title.required' => 'Vui lòng nhập tiêu đề',
        ];

        $request->validate($rules, $messages);

        $emailTitle = $request->input('title');
        $data = ['hoten' => $request->input('name'), 'email' => $request->input('email'), 'tinnhan' => $request->input('message'),'title' => $emailTitle];
        Mail::send('user.emails.blaks', $data, function ($mess)  use ($data) {
            $mess->from('rvbatdongsan@gmail.com', 'Thanh Tuấn');
            $mess->to('rvbatdongsan@gmail.com', 'Tuan Thanh')->subject($data['title']);
        });
        echo "<script>
            alert('Cảm ơn bạn đã góp ý. Chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất');
            window.location =  '" . url('/') . "'
        </script>";
    }

    public function about()
    {
        return view('user.pages.about');
    }

    public function searchPost(Request $req)
    {
        $tinhThanhPhos = $this->getCityList();
        $postList = null;
        if($req->keyFrom < $req->keyTo && $req->thanhPho && $req->quan){
            $postList = SanPham::where('trangthai', 1)->whereBetween('gia',[$req->keyFrom, $req->keyTo])
                ->where('id_tp', $req->thanhPho)
                ->where('id_quan', $req->quan);
            // Log::info('1');
        }elseif($req->keyFrom < $req->keyTo && $req->thanhPho){
            $postList = SanPham::where('trangthai', 1)->whereBetween('gia',[$req->keyFrom, $req->keyTo])
                ->where('id_tp', $req->thanhPho);
            // Log::info('2');
        }elseif ($req->keyFrom < $req->keyTo) {
            $postList = SanPham::where('trangthai', 1)->whereBetween('gia',[$req->keyFrom, $req->keyTo]);
            // Log::info('3');

        }elseif ($req->keyWord && $req->thanhPho && $req->quan) {
            $postList = SanPham::where('trangthai', 1)->where('ten', 'like', '%' . $req->keyWord . '%')
                ->orWhere('id', $req->keyWord)
                ->where('id_tp', $req->thanhPho)
                ->where('id_quan', $req->quan);
        } elseif ($req->keyWord && $req->thanhPho) {
            $postList = SanPham::where('trangthai', 1)->where('ten', 'like', '%' . $req->keyWord . '%')
                ->orWhere('id', $req->keyWord)
                ->where('id_tp', $req->thanhPho);
        } elseif ($req->keyWord) {
            $postList = SanPham::where('trangthai', 1)->where('ten', 'like', '%' . $req->keyWord . '%')
                ->orWhere('id', $req->keyWord);
            // Log::info('keyWord');

        } elseif ($req->thanhPho && $req->quan) {
            $postList = SanPham::where('trangthai', 1)->where('id_tp', $req->thanhPho)
                ->where('id_quan', $req->quan);
        } elseif($req->thanhPho){
            $postList = SanPham::where('trangthai', 1)->where('id_tp', $req->thanhPho);
        }else {
            $postList = SanPham::where('trangthai', 1);
        }
        // dd($postList);
        $postList = $postList->orderBy('id', 'DESC')->paginate(9);

        return view('user.pages.list', compact('postList', 'tinhThanhPhos'));
    }
}