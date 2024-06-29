<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WooTienda extends Model
{
    protected $fillable = [
		'woo_id_tienda',
		'razon_social',
        'cuit',
		'usr_api',
		'psw_api',
		'f_alta',
		'f_update',
		'id_tienda',
		'prefijo',
		'ck_tienda',
		'cs_tienda',
		'url_tienda',
		'activo',    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/woo_tiendas/'.$this->getKey());
    }
}
