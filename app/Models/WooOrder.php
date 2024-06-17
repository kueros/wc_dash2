<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderIn
 *
 * @property $id
 * @property $id_tienda
 * @property $order_id
 * @property $index_id
 * @property $order_nro
 * @property $fechacre
 * @property $tstamp
 * @property $respcode
 * @property $status
 * @property $resmessage
 * @property $trackid
 * @property $shipment_id
 * @property $print_url
 * @property $code
 * @property $email
 * @property $idstore
 * @property $financial_status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class WooOrder extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_tienda', 'order_id', 'index_id', 'order_nro', 'fechacre', 'tstamp', 'respcode', 'status', 
	'resmessage', 'trackid', 'shipment_id', 'print_url', 'code', 'email', 'idstore', 'financial_status'];


}
