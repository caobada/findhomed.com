<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //
    public $remember_token = false;
    protected $table = "m_option";
    protected $fillable = ['name','value'];
}
