<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Auth\Middleware;
use App\sanpham;
use App\nhomsanpham;
use Cart;
use DB;
use Auth;

class Products extends Controller
{

  public function products(){
   if(Auth::check())
   {
    $products = DB::table('sanpham')->where('TrangThai', 0)->orderby('KhuyenMai','desc')->paginate(12);
    $loaisanpham = nhomsanpham::all();
    $Total = Cart::session(Auth::id())->getTotal();
    $Quantity = Cart::session(Auth::id())->getTotalQuantity();
    return view('index', compact('products','loaisanpham','Total','Quantity'));
  }else
  {
    $products = sanpham::orderby('KhuyenMai','desc')->paginate(12);
    $loaisanpham = nhomsanpham::all();
    return view('index', compact('products','loaisanpham'));
  }

}

public function lienhe(){
  if(Auth::check())
  {
    $products = sanpham::orderby('KhuyenMai','desc')->paginate(12);
    $loaisanpham = nhomsanpham::all();
    $Total = Cart::session(Auth::id())->getTotal();
    $Quantity = Cart::session(Auth::id())->getTotalQuantity();
    return view('contact', compact('products','loaisanpham','Total','Quantity'));
  }else{
    $products = sanpham::orderby('KhuyenMai','desc')->paginate(12);
    $loaisanpham = nhomsanpham::all();
    return view('contact', compact('products','loaisanpham'));
  }
}

public function ctSanPham($loaisp, $id){
  if(Auth::check())
  {
    $Total = Cart::session(Auth::id())->getTotal();
    $Quantity = Cart::session(Auth::id())->getTotalQuantity(); 
    $ctsp = sanpham::where('masp',$id)->get();
    $loaisanpham = nhomsanpham::all();
    $sp_theoloai = sanpham::where('manhom',$loaisp)->paginate(8);
    return view('shop-details', compact('ctsp','loaisanpham','sp_theoloai','Total','Quantity'));
  }else{
    $ctsp = sanpham::where('masp',$id)->get();
    $loaisanpham = nhomsanpham::all();
    $sp_theoloai = sanpham::where('manhom',$loaisp)->paginate(8);
    return view('shop-details', compact('ctsp','loaisanpham','sp_theoloai'));
  }
}

public function timkiem(Request $Request){
  if(Auth::check())
  {
    $loaisanpham = nhomsanpham::all();
    $Total = Cart::session(Auth::id())->getTotal();
    $Quantity = Cart::session(Auth::id())->getTotalQuantity();
    $timkiem = sanpham::where('tensp','like','%'.$Request->txttimkiem.'%')
                    ->orwhere('dongia',$Request->txttimkiem)
                    ->paginate(8);
    return view('index', compact('timkiem','loaisanpham','Total','Quantity'));
  }else
  {
    $loaisanpham = nhomsanpham::all();
    $timkiem = sanpham::where('tensp','like','%'.$Request->txttimkiem.'%')
    ->orwhere('dongia',$Request->txttimkiem)->paginate(8);
    return view('index', compact('timkiem','loaisanpham'));
  }
}

public function sanphamtheoloai($id){
  if(Auth::check())
  {
    $sanphamtheoloai = DB::table('sanpham')->where('manhom', $id)->paginate(8);
    $loaisanpham = nhomsanpham::all();
    $Total = Cart::session(Auth::id())->getTotal();
    $Quantity = Cart::session(Auth::id())->getTotalQuantity();
    return view('index', compact('sanphamtheoloai', 'loaisanpham', 'Total', 'Quantity'));
  }
  else
  {
    $sanphamtheoloai = DB::table('sanpham')->where('manhom', $id)->paginate(8);
    $loaisanpham = nhomsanpham::all();
    return view('index', compact('sanphamtheoloai', 'loaisanpham'));
  }
}

public function postLienhe(request $request){
  $date = [
    'hoten'=>$request->txtname,
    'email'=>$request->txtemail,
    'cmt'=>$request->txtmessage
  ];
  Mail::send('mail',$date,function($mail){
    $mail->from('shopgaran6282020@gmail.com','testmail');
    $mail->to('shopgaran6282020@gmail.com','test')->subject('test gui mail');
  });
  return redirect()->back()->with('thanhcong','Gửi Thành Công');
}
}
