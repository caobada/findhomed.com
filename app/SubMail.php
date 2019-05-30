<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMail extends Model
{
    //
    public $table = 'submail';
    protected $fillable = [
		'mail'
	];
}
