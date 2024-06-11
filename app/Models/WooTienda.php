<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WooTienda extends Model
{
	protected $fillable = [
		'token',
		'code',
		'cuit',
		'shop',
		'fapiusr',
		'fapiclave',
		'hmac',
		'host',
		'state',

	];


	protected $dates = [
		'created_at',
		'updated_at',

	];

	protected $appends = ['resource_url'];

	/* ************************ ACCESSOR ************************* */

	public function getResourceUrlAttribute()
	{
		return url('/admin/stores/' . $this->getKey());
	}
}
