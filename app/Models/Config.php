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
    protected $fillable = 
					[
						'woo_id_tienda',
						'url_create_order', 
						'url_create_order_milo', 
						'url_rate', 
						'url_cancel_order',
						'url_cancel_order_milo', 
						'url_logistica_inversa', 
						'url_download', 
						'shipping_id', 
						'key_shipping_id', 
						'path_log' 
					];
}
