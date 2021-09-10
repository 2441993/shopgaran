<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
   protected $table = "nhanvien";
   public $timestamps = false;

   public function hoadon(){
   		return $this -> hasMany('app\hoadon', 'manv', 'manv');
   	}
   	public function user_Kh(){
    	return $this -> hasOne('app\User', 'id', 'id');
    }
}
