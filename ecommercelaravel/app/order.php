<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function user(){
		return $this->belongsTo('App\User');
	}
    public function product(){
		return $this->belongsTo('App\Models\product');
	}
}
