<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\khachhang;
use App\nhomsanpham;
use App\chitiethoadon;
use App\user;
use App\sanpham;
use App\hoadon;
use App\nhanvien;
use App\shipper;
use App\tenKhongDau;
use DB;
use Auth;


class adminController extends Controller
{
    public function sanpham(){
    	if(Auth::check() && Auth::user()->level == 1){
    		$sanpham = DB::table('sanpham')->orderby('TrangThai' ,'desc')->get();

    		return view('admin.sanpham', compact('sanpham'));
    	}else
    	{
    		return redirect('login');
    	}
    }

    public function hoadon(){
    	if(Auth::check() && Auth::user()->level == 1)
    	{
    		$hoadon = DB::table('hoadon')->orderby('TrangThai', 'desc')->get();
    		return view('admin.hoadon', compact('hoadon'));
    	}
    	else
    	{
    		return redirect('login');
    	}
    }

    public function user(){
    	if(Auth::check() && Auth::user()->level == 1){
    		$user = DB::table('users')->orderby('TrangThai','desc')->get();
    		return view('admin.user', compact('user'));
    	}return redirect('login');
    }

    public function themsanpham(){
        if(Auth::check() && Auth::user()->level == 1)
        {
            $nhomsanpham = nhomsanpham::all();
            $themsanpham = 1;
            return view('admin.them', compact('themsanpham','nhomsanpham'));
        }
        return redirect('login');
    }

    public function Getthem_user(){
        if(Auth::check() && Auth::user()->level == 1)
        {
            $themuser = 1;
            return view('admin.them', compact('themuser'));
        }return redirect('login');
    }

    public function Getthem_hoadon(){
        if(Auth::check() && Auth::user()->level == 1)
        {
            $themhoadon = 1;
            $khachhang = khachhang::all();
            $nhanvien = nhanvien::all();
            $shipper = shipper::all();
            return view('admin.them', compact('themhoadon','khachhang','shipper','nhanvien'));
        }return redirect('login');
    }

    public function xulythemsanpham(Request $Request){
        if(Auth::check() && Auth::user()->level == 1)
        {
            $this->validate($Request,
                [
                    'img' => 'image|max:2028',

                ],
                [
                    'img.image'=>'Định dạng hình ảnh không cho phép;',
                    'img.max'=> 'dung lượng file quá lớn',
                ]);
            $name_img = $Request->file('img')->getClientOriginalName();
            DB::table('sanpham')->insert([
                'tensp'     => $Request->tensanpham,
                'motasp'    => $Request->mota,
                'hinhsp'    => $name_img,
                'dongia'    => $Request->dongia,  
                'giagoc'    => $Request->dongia,
                'slnhap'    => $Request->soluongnhap,
                'slton'     => $Request->soluongnhap,
                'KhuyenMai' => $Request->khuyuenmai,
                'manhom'    => $Request->manhom,
                'TrangThai' => 0
            ]);
            $Request->file('img')->move('public/img/shop/',$name_img);
            return redirect()->back()->with('thanhcong','Thêm Mới Thành Công');
        }return redirect('login');
    }

    public function GetSuaSanPham($id){
        if(Auth::check() && Auth::user()->level == 1)
        {
            $nhomsanpham = nhomsanpham::all();
            $sanphamsua = DB::table('sanpham')->where('masp', $id)->get();
            return view('admin.sua', compact('sanphamsua','nhomsanpham'));
        }return redirect('login');
    }

    public function PostSuaSanPham($id, Request $Request){
        if(Auth::check() && Auth::user()->level == 1)
        {
            DB::table('sanpham')
            ->where('masp', $id)
            ->update([
                'tensp'     => $Request->tensanpham,
                'motasp'    => $Request->mota,
                'dongia'    => $Request->dongia,  
                'giagoc'    => $Request->giagoc,
                'slnhap'    => $Request->soluongnhap,
                'slton'     => $Request->soluongton,
                'KhuyenMai' => $Request->khuyuenmai,
                'manhom'    => $Request->manhom,
                'TrangThai' =>$Request->trangthai
            ]);
            return redirect()->back()->with('thanhcong','Sửa Thành Công');
        }return redirect('login');
    }

    public function PostXoaSanPham($id){
        if(Auth::check() && Auth::user()->level == 1)
        {
            DB::table('sanpham')->where('masp', $id)->update([
              'TrangThai' => 1  
            ]);
            return redirect()->back();
        }return redirect('login');
    }

    public function getSuaUser($id){
        if(Auth::check() && Auth::user()->level == 1)
        {
            $userSua = DB::table('users')->where('id', $id)->get();
            return view('admin.sua', compact('userSua'));
        }return redirect('login');
    }

    public function PostSuaUser($id, Request $Request){
        if(Auth::check() && Auth::user()->level == 1)
        {
            DB::table('users')->where('id', $id)
            ->update([
                'name'      => $Request->username,
                'password'  => Hash::make($Request->password),
                'email'     => $Request->email, 
                'trangThai' => $Request->trangThai
            ]);
            return redirect()->back()->with('thanhcong','Sửa Thành Công');
        }return redirect('login');
    }

    public function PostXoaUser($id){
            if(Auth::user()->level == 2)
            {       
               // DB::table('khachhang')->where('id', $id)->update(['TrangThai'=>1]);
                DB::table('users')->where('id', $id)->update(['TrangThai'=>1]);

                return redirect()->back()->with('thanhcong','xóa Thành Công');

            }else
            {
               // DB::table('nhanvien')->where('id', $id)->update(['TrangThai'=>1]);
                DB::table('users')->where('id', $id)->update(['TrangThai'=>1]);  
                return redirect()->back()->with('thanhcong','xóa Thành Công');
            }    
    }

    public function getsuahoadon($id){
        if(Auth::check() && Auth::user()->level == 1)
        {
            $suahoadon = 1;
            $shipper = shipper::all();
            $hoadon = DB::table('hoadon')->where('mahd', $id)->first();
            $chitiethoadon = DB::table('chitiethoadon')->where([
                ['mahd', $id]
            ])->get();
            return view('admin.sua', compact('hoadon', 'chitiethoadon','suahoadon','shipper'));
        }return redirect('login');
    }
    public function Postsuahoadon($id, Request $Request){
        DB::table('hoadon')->where('mahd', $id)->update([
            'idshipper'=>$Request->shipper,
            'ngaylapHD'=>$Request->ngaylaphd,
            'ngaylapHD'=>$Request->ngaylaphd,
            'ngaygiao'=>$Request->ngaygiao,
            'noichuyen'=>$Request->noigiaohang,
            'TrangThai'=>$Request->trangthai
        ]);
        return redirect()->back()->with('thanhcong', 'Sửa Thành Công');
    }
    public function suachitiethoadon($mahd, $masp, Request $Request){
        $hoadon = DB::table('hoadon')->where('mahd', $mahd)->first();
        $sp = DB::table('sanpham')->where('masp',  $masp)->first();
        $cthd = DB::table('chitiethoadon')->where([
            ['mahd', $mahd],
            ['masp', $masp]
        ])->first();

        if($Request->soluongct > $sp->slton)
        {
            return redirect()->back()->with('loi', 'lổi');
        }else
            {
                if($Request->soluongct > $cthd->soluong)
                {
                    DB::table('hoadon')->where('mahd', $mahd)->update([
                        'slsp'=>$hoadon->slsp + $Request->soluongct - $cthd->soluong,
                    ]);
                    DB::table('sanpham')->where('masp',  $masp)->update([
                        'slton'=>$sp->slton - ($Request->soluongct - $cthd->soluong),
                    ]);
                }
                   else{
                    DB::table('hoadon')->where('mahd', $mahd)->update([
                        'slsp'=>$hoadon->slsp -  ($cthd->soluong - $Request->soluongct),
                    ]);

                    DB::table('sanpham')->where('masp',  $masp)->update([
                        'slton'=>$sp->slton + ($cthd->soluong - $Request->soluongct),
                    ]);
                }
                DB::table('chitiethoadon')->where('masp', $masp)->update([
                    'soluong'=>$Request->soluongct,
                    'TrangThai'=>$Request->trangthai
                ]);
                
                return redirect()->back()->with('thanhcong','Sửa Thành Công');;
            }
   
}
    public function xoa_chi_tiet_hoa_don($mahd, $masp){
        $hoadon = DB::table('hoadon')->where('mahd', $mahd)->first();
        $cthd = DB::table('chitiethoadon')->where([
            ['mahd', $mahd],
            ['masp', $masp]
        ])->first();

        DB::table('chitiethoadon')
        ->where([
            ['mahd', $mahd],
            ['masp', $masp]
        ])
        ->update([
            'TrangThai'=>1,
        ]);
        DB::table('hoadon')->where('mahd', $mahd)
        ->update([
            'slsp'=> $hoadon->slsp - $cthd->soluong,
        ]);
        return redirect()->back()->with('thanhcong','xóa Thành Công');
    }
    public function PostXoaHoaDon($id){

            DB::table('hoadon')->where('mahd', $id)->update(['TrangThai'=>1]);
            $hoadon = DB::table('chitiethoadon')->where('mahd', $id)->get();
            
            foreach ($hoadon as $value) {
                $sanpham = DB::table('sanpham')->where('masp', $value->masp)->first();
                DB::table('sanpham')->where('masp', $value->masp)
                ->update([
                    'slton'=> $sanpham->slton + $value->soluong,
                ]);
            }
            return redirect()->back()->with('thanhcong','Xóa Thành Công');

    }

    public function Postthem_user(Request $Request){
        if(Auth::check() && Auth::user()->level == 1)
        {
            if($Request->loaiuser == 1)
            {
                $this->validate($Request,
                    [
                        'email'=> 'email|unique:users,email',
                        'tennv' => 'required',
                        'ngaysinhNV' => 'required',
                        'diachiNV' => 'required',
                        'sdtNV' => 'required'
                    ],
                    [
                        'email.unique'=>'Email đã sữ dụng',
                        'tennv.required'=>'Tên Nhân viên không được bỏ trống'.'<br>',
                        'ngaysinhNV.required'=> 'Ngày sinh không được bỏ trống'.'<br>',
                        'diachiNV.required'=> 'Địa Chỉ không được bỏ trống'.'<br>',
                        'sdtNV.required'=> 'Số Điện Thoại không được bỏ trống'.'<br>'
                    ]);
                $user = new User();
                $user->name = $Request->username;
                $user->email = $Request->email;
                $user->password = Hash::make($Request->password);
                $user->level = 1;
                $user->save();

                $nhanvien = new nhanvien();
                $nhanvien->tennv = $Request->tennv;
                $nhanvien->ngaysinh = $Request->ngaysinhNV;
                $nhanvien->dicchi = $Request->diachiNV;
                $nhanvien->sdt = $Request->sdtNV;
                $nhanvien->id = $user->id;
                $nhanvien->save();

                return redirect()->back()->with('thanhcong','Thêm Thành Công');
            }else{
                $this->validate($Request,
                    [
                        'email'=> 'email|unique:users,email',
                        'tenkh' => 'required',
                        'diachiKH' => 'required',
                        'sdtKH' => 'required',
                    ],
                    [
                        'email.unique'=>'Email đã sữ dụng',
                        'tenkh.required'=>'Tên Khách Hàng không được bỏ trống'.'<br>',
                        'diachiKH.required'=> 'Địa Chỉ ngay sinh không được bỏ trống'.'<br>',
                        'sdtKH.required'=> 'Số Điện Thoại không được bỏ trống'.'<br>'
                    ]);
                $user = new User();
                $user->name = $Request->username;
                $user->email = $Request->email;
                $user->password = Hash::make($Request->password);
                $user->level = 2;
                $user->save();

                $khachhang = new khachhang();
                $khachhang->tenkh= $Request->tenkh;
                $khachhang->diachi= $Request->tenkh;
                $khachhang->sdt= $Request->tenkh;
                $khachhang->id= $user->id;
                $khachhang->save();
                return redirect()->back()->with('thanhcong','Thêm Thành Công');
            }
        }return redirect('login');
    }

    public function Getnhanvien(){
        if(Auth::check() && Auth::user()->level == 1)
        {
            $nhanvien = DB::table('nhanvien')->get();
            return view('admin.nhanvien', compact('nhanvien'));
        }else
        return redirect('login');
    }

    public function getSuaNhanVien($id){
        if(Auth::check() && Auth::user()->level == 1)
        {
            $suanhanvien = 1;
            $nhanvien = DB::table('nhanvien')->where('Manv', $id)->get();
            return view('admin.sua', compact('suanhanvien','nhanvien'));
        }else
        return redirect('login');
    }

    public function postSuaNhanVien($id,Request $Request){
        if(Auth::check() && Auth::user()->level == 1)
        {
            DB::table('nhanvien')->where('Manv', $id)->update([
               'tennv' => $Request->tennv,
               'ngaysinh' => $Request->ngaysinh,
               'dicchi' => $Request->diachi,
               'sdt' => $Request->sdt,
               'TrangThai' => $Request->TrangThai
           ]);
            return redirect()->back()->with('thanhcong','Sửa Thành Công');
        }else
        return redirect('login');
    }
    public function postXoaNhanVien($id){

            DB::table('nhanvien')->where('id', $id)->update(['TrangThai'=>1]);
            DB::table('users')->where('id', $id)->update(['TrangThai'=>1]);
            return redirect()->back()->with('thanhcong','Xóa Thành Công');
    }


    public function Getkhachhang(){
        if(Auth::check() && Auth::user()->level == 1)
        {
            $khachhang = DB::table('khachhang')->get();
            return view('admin.khachhang', compact('khachhang'));
        }else
        return redirect('login');
    }

    public function getSuaKhachHang($id){
        if(Auth::check() && Auth::user()->level == 1)
        {
            $suakhachhang = 1;
            $khachhang = DB::table('khachhang')->where('makh', $id)->get();
            return view('admin.sua', compact('khachhang','suakhachhang'));
        }else
        return redirect('login');
    }

    public function postSuaKhachHang($id,Request $Request){
        if(Auth::check() && Auth::user()->level == 1)
        {
            DB::table('khachhang')->where('makh', $id)->update([
                'tenkh'=>$Request->tenkh,
                'diachi'=>$Request->diachi,
                'sdt'=>$Request->sdt,
                'TrangThai'=>$Request->TrangThai

            ]);
            return redirect()->back()->with('thanhcong','Sửa Thành Công');
        }else
        return redirect('login');
    }

    public function postXoaKhachHang($id){
        DB::table('khachhang')->where('id', $id)->update(['TrangThai'=>1]);
        DB::table('users')->where('id', $id)->update(['TrangThai'=>1]);
        return redirect()->back()->with('thanhcong','Xóa Thành Công');
    }

}
