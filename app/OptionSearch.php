<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionSearch extends Model
{
    public $remember_token = false;
    protected $table = "option_search";
    protected $fillable = ['type','option','name','value_name'];
}
