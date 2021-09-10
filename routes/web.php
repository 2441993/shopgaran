<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\checkdangnhap;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*----------------------trang chu------------------------------*/

Route::get('/', function () {
return view('index');
});
Route::get('trang-chu', function () {
    return view('index');
});
Route::get('/','Products@products');
Route::get('trang-chu','Products@products');

/*------------------------mail----------------------------*/

route::get('lien-he',[
    'as'=>'lien-he',
    'uses'=>'Products@lienhe'
]);
/*----------------------------------------------------*/
route::get('san-pham-theo-loai/{id}',[
    'as'=>'san-pham-theo-loai',
    'uses'=>'Products@sanphamtheoloai'
]);

Route::get('san-pham/{loaisp}/{id}', function () {
    return view('shop-details');
});
Route::get('san-pham/{loaisp}/{id}','Products@ctSanPham');



/*----------------------------------------------------*/
route::get('tim-kiem',[
	'as'=>'tim-kiem',
	'uses'=>'Products@timkiem'
]);
/*---------------------Gio Hang-------------------------------*/
Route::get('gio-hang',[
    'as'=>'gio-hang',
    'uses'=>'Shoppingcart@giohang'
]);

Route::get('update-gio-hang/{id}/{qty}',[
    'as'=>'update-gio-hang',
    'uses'=>'Shoppingcart@updateProducts'
]);
Route::get('delete-item-cart/{id}',[
    'as'=>'delete-item-cart',
    'uses'=>'Shoppingcart@deleteItemCart'
]);
/*------------------user-------------------------*/

Route::get('login', function () {
    return view('login');
});

route::get('signup',[
    'as'=>'signup',
    'uses'=>'taikhoan@signup'
]);

route::post('dang-nhap',[
    'as'=>'dang-nhap',
    'uses'=>'taikhoan@dangnhap'
]);
route::get('dang-xuat',[
    'as'=>'dang-xuat',
    'uses'=>'taikhoan@dangxuat'
]);
route::post('dang-ky',[
	'as'=>'dang-ky',
	'uses'=>'taikhoan@dangky'
]);


/*---------------------shopping cart-----------------------------*/

route::post('shopping_cart/{id}',[
    'as'=>'shoppingcart',
    'uses'=>'Shoppingcart@shoppingcarts'
]);

/*---------------------thanh toan-----------------------------*/

route::get('thanh-toan',[
    'as'=>'thanh-toan',
    'uses'=>'Shoppingcart@VNPAY'
]);

route::get('xu-ly',[
    'as'=>'xu-ly',
    'uses'=>'Shoppingcart@xulyVNPAY'
]);
/* ------------------------hoan tra------------------------------*/
route::get('Post-hoan-tra/{id}',[
    'as'    =>'hoantra',
    'uses'  =>'Shoppingcart@Posthoantra'
]);

route::get('hoan-tra',[
    'as'=>'hoantra',
    'uses'=>'Shoppingcart@xulyhoantra'
]);
/* ------------------------admin------------------------------*/
route::get('thong-tin-ca-nhan',[
    'as'=>'thong-tin-ca-nhan',
    'uses'=>'userController@thongtin'
]);
route::get('admin',[
    'as'=>'admin',
    'uses'=>'adminController@sanpham'
]);

route::get('admin/san-pham',[
    'as'=>'admin/san-pham',
    'uses'=>'adminController@sanpham'
]);

route::get('admin/hoa-don',[
    'as'=>'admin/hoa-don',
    'uses'=>'adminController@hoadon'
]);

route::get('admin/user',[
    'as'=>'admin/user',
    'uses'=>'adminController@user'
]);

route::get('admin/them',[
    'as'    =>'them',
    'uses'  =>'adminController@themsanpham'
]);

route::post('them-san-pham',[
    'as'    =>'them-san-pham',
    'uses'  =>'adminController@xulythemsanpham'
]);
route::get('admin/sua-san-pham/{id}',[
    'as'    =>'suasanpham',
    'uses'  =>'adminController@GetSuaSanPham'
]);
route::post('Post-sua-san-pham/{id}',[
    'as'    =>'suasanpham',
    'uses'  =>'adminController@PostSuaSanPham'
]);

route::get('admin/Post-xoa-san-pham/{id}',[
    'as'    =>'xoasanpham',
    'uses'  =>'adminController@PostXoaSanPham'
]);

route::get('admin/get-sua-user/{id}',[
    'as'    =>'suasanpham',
    'uses'  =>'adminController@getSuaUser'
]);
route::post('Post-sua-user/{id}',[
    'as'    =>'suauser',
    'uses'  =>'adminController@PostSuaUser'
]);

route::get('admin/get-xoa-user/{id}',[
    'as'    =>'xoauser',
    'uses'  =>'adminController@PostXoaUser'
]);
route::get('admin/sua-hoa-don/{id}',[
    'as'    =>'suahoadon',
    'uses'  =>'adminController@getsuahoadon'
]);
route::post('sua-hoa-don/{id}',[
    'as'    =>'suahoadon',
    'uses'  =>'adminController@Postsuahoadon'
]);
route::post('sua-chi-tiet-hoa-don/{mahd}/{masp}',
[
    'as'    =>'suachitiethoadon',
    'uses'  =>'adminController@suachitiethoadon'
]);
route::get('xoa-chi-tiet-hoa-don/{mahd}/{masp}',[
    'as'=>'xoacthd',
    'uses'  =>'adminController@xoa_chi_tiet_hoa_don'
]);
route::get('Post-xoa-hoa-don/{id}',[
    'as'    =>'xoahoadon',
    'uses'  =>'adminController@PostXoaHoaDon'
]);

route::get('admin/them-user',[
    'as'    =>'themuser',
    'uses'  =>'adminController@Getthem_user'
]);

route::post('Post-them-user',[
    'as'    =>'themuser',
    'uses'  =>'adminController@Postthem_user'
]);
route::get('admin/them-hoa-don',[
    'as'    =>'themhoadon',
    'uses'  =>'adminController@Getthem_hoadon'
]);

route::get('admin/nhan-vien',[
    'as'    =>'nhanvien',
    'uses'  =>'adminController@Getnhanvien'
]);
route::get('admin/sua-nhan-vien/{id}',[
    'as'    =>'nhanvien',
    'uses'  =>'adminController@getSuaNhanVien'
]);

route::post('Post-sua-nhan-vien/{id}',[
    'as'    =>'nhanvien',
    'uses'  =>'adminController@postSuaNhanVien'
]);

route::get('postXoaNhanVien/{id}',[
    'as'    =>'nhanvien',
    'uses'  =>'adminController@postXoaNhanVien'
]);
route::get('admin/khach-hang',[
    'as'    =>'nhanvien',
    'uses'  =>'adminController@Getkhachhang'
]);

route::get('admin/get-sua-nhan-vien/{id}',[
    'as'    =>'suanhanvien',
    'uses'  =>'adminController@getSuaKhachHang'
]);

route::post('Post-sua-khach-hang/{id}',[
    'as'    =>'suanhanvien',
    'uses'  =>'adminController@postSuaKhachHang'
]);
route::get('postxoakhachhang/{id}',[
    'as'    =>'xoakhachhang',
    'uses'  =>'adminController@postXoaKhachHang'
]);

Route::get('qr-code', function () {
    return QrCode::size(500)->generate('Welcome to kerneldev.com!');
});