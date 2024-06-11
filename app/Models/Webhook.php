<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webhook extends Model
{
	protected $fillable = [
		'webhookId',
		'shopId',
		'url',
		'tipo',
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
		return url('/admin/webhooks/' . $this->getKey());
	}
}
