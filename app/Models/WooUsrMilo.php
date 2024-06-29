<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WooUsrMilo
 *
 * @property $id
 * @property $id_tienda
 * @property $usr_milo
 * @property $psw_milo
 * @property $CustomerCode
 * @property $FirstName
 * @property $LastName
 * @property $Telephone
 * @property $Email
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class WooUsrMilo extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_tienda', 'usr_milo', 'psw_milo', 'CustomerCode', 'FirstName', 'LastName', 'Telephone', 'Email'];


}
