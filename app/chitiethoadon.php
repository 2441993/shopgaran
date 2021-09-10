<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitiethoadon extends Model
{
    protected $table = "chitiethoadon";
    public $timestamps = false;


    public function sanpham(){
    	return $this ->belongsTo('app\sanpham','masp','masp');
    }

    public function hoadon(){
    	return $this -> belongsTo('app\hoadon','mahd','mahd');
    }
}
