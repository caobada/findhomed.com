<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    public $remember_token = false;
    protected $table ="report";
    protected $fillable = [
		'id','hometype_id','type_report','user_id'
    ];
    public function hometype(){
    	return $this->belongsTo('App\HomeType','hometype_id','id');
    }
}
