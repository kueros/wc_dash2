<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WooTienda
 *
 * @property $woo_id_tienda
 * @property $razon_social
 * @property $cuit
 * @property $usr_api
 * @property $psw_api
 * @property $f_alta
 * @property $f_update
 * @property $id_tienda
 * @property $prefijo
 * @property $ck_tienda
 * @property $cs_tienda
 * @property $url_tienda
 * @property $activo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class WooTienda extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['woo_id_tienda', 'razon_social', 'cuit', 'usr_api', 'psw_api', 'f_alta', 'f_update', 'id_tienda', 'prefijo', 'ck_tienda', 'cs_tienda', 'url_tienda', 'activo'];


}
