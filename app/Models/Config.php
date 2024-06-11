<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Config
 *
 * @property $id
 * @property $urlroot
 * @property $cli_id
 * @property $cli_pass
 * @property $re_dir_url
 * @property $fi_logs
 * @property $scope
 * @property $callback_url_carrier
 * @property $webhook_address_orders_create
 * @property $webhook_address_orders_paid
 * @property $webhook_address_orders_cancelled
 * @property $api_u
 * @property $api_p
 * @property $shop_test
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Config extends Model
{

	protected $perPage = 20;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = ['urlroot', 'cli_id', 'cli_pass', 're_dir_url', 'fi_logs', 'scope', 'callback_url_carrier', 'webhook_address_orders_create', 'webhook_address_orders_paid', 'webhook_address_orders_cancelled'];
}
