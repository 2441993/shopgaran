<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $table = "khachhang";
    public $timestamps = false; 
    public function hoadon(){
    	return $this -> hasMany('app\hoadon', 'makh', 'makh');
    }
    public function user_NV(){
    	return $this -> hasOne('app\User', 'id', 'id');
    }
}
