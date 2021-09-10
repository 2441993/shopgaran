<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\nhomsanpham;
use App\khachhang;
use DB;


class taikhoan extends Controller
{
    public function dangky(Request $request){
        $this->validate($request,
            [
                'username'=>'unique:users,name',
                'email'=> 'email|unique:users,email'
            ],
            [

                'email.unique'=>'Email đã sữ dụng',
                'username.unique'=>'Tên tài khoản đã được sữ dụng', 

            ]);
            $user = new User();
            $user->name = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->level = 2;
            $user->status = 0;
            $user->save();

            $khachhang = new khachhang();
            $khachhang->tenkh = $request->tenkhachhang;
            $khachhang->diachi = $request->diachi;
            $khachhang->sdt = $request->sdt;
            $khachhang->id = $user->id;
            $khachhang->save();

            $dangnhap = array('name'=> $request->username, 'password'=> $request->password);
            Auth::attempt($dangnhap);
            return redirect('trang-chu');
            //return redirect()->back()->with('thanhcong','Đăng Ký Thành Công');
    }

    public function signup(){
        $loaisanpham = nhomsanpham::all();
        return view('signup', compact('loaisanpham'));
    }

    public function dangnhap(request $request){
            $dangnhap = array('name'=> $request->txtusername, 'password'=> $request->txtpassword);
            if(Auth::attempt($dangnhap))
                {
                    if(Auth::user()->trangThai == 0)
                    {
                        if(Auth::user()->level == 1)
                            return redirect('admin/user');
                        else
                            return redirect('trang-chu');
                    }else
                    {
                        return redirect()->back()->with('thanhcong','Tài khoản bị khóa');
                    }
                }   
            else
                {
                    return redirect('login');
                }
    }

    public function dangxuat(){
        Auth::logout();
        return redirect('trang-chu');
    }
}
