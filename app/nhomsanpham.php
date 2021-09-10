<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhomsanpham extends Model
{
    protected $table = "nhomsanpham";
    public $timestamps = false;
    public function nhonmsanpham(){
    	return $this->hasMany('app\sanpham','manhom','manhom');
    }
}
