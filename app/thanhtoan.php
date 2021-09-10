<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thanhtoan extends Model
{
	public $timestamps = false;
	protected $table = "thanhtoans";
    public function thanhtoan(){

        return $this -> hasOne('ap\hoadon', 'mahd', 'mahd');
    }
}
