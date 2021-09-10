<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table = "sanpham";
     public $timestamps = false;
     public function sanpham(){
     	return $this->belongsTo('app\nhomsanpham','manhom','masp');
     }

     public function CThoadon(){
     	return $this->hasMany('app\chitiethoadon','masp','masp');
     }
}
