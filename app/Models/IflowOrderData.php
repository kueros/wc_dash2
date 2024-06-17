<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IflowOrderData extends Model
{
    protected $fillable = [
        'order_id',
        'tracking_id',
        'shipment_id',
        'print_url',
        'code',
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/stores/'.$this->getKey());
    }
}
