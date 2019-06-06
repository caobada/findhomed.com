<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeMeasure extends Model
{
    //
    protected $table = 'type_measure';
    protected $fillable = [
		'type','value'
    ];
    public function home(){
    	return $this->belongsTo('App\Home','name','type_price');
    } 
}
