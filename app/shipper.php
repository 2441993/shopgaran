<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shipper extends Model
{
    protected $table = "shipers";
    public $timestamps = false;
    public function nhonmsanpham(){
    	return $this->hasMany('app\hoadon','IDshipper','IDshipper');
    }
}
