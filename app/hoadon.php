<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    protected $table = "hoadon";
    public $timestamps = false;
    public function CThoadon(){
    	return $this -> hasMany('app\chitiethoadon', 'mahd', 'mahd');
    }

    public function khachhang(){
    	return $this -> belongsTo('app\khachhang', 'makh','makh');
    }

    public function nhanvien(){
    	return $this -> belongsTo('app\nhanvien', 'Manv', 'Manv');
    }

    public function thanhtoan(){
        return $this -> hasOne('ap\thanhtoan', 'mahd', 'mahd');
    }
}
