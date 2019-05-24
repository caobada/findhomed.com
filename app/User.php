<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable {
	use Notifiable;
	use EntrustUserTrait;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $User;
	public function roles() {
		return $this->belongsToMany('App\Role');
	}

	public $remember_token = false;
	protected $fillable = [
		'username','email','provider','provider_id', 'status', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'remember_token',
	];
}
