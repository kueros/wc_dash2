<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WooOrderData extends Model
{
	protected $perPage = 20;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = ['order_id','first_name','last_name','address1','address2','city','zip','province','country','name','province_code','note'];

	protected $dates = [
		'created_at',
		'updated_at',

	];
}
