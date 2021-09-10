<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khachhang;
use App\users;
use Hash;
use DB;
use Auth;

class userController extends Controller
{
    public function thongtin(){
    	if(Auth::check())
    	{
    		$khachhang = DB::table('khachhang')->where('id', Auth::id())->first();
    		$user = DB::table('users')->where('id', Auth::id())->first();
    		return view('user.userProfile', compact('khachhang','user'));
    	}
    	return redirect('login');
    }
}
