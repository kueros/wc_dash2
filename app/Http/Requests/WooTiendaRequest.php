<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WooTiendaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'woo_id_tienda' => 'required',
			'razon_social' => 'string',
			'cuit' => 'string',
			'usr_api' => 'string',
			'psw_api' => 'string',
			'f_alta' => 'required',
			'f_update' => 'required',
			'id_tienda' => 'string',
			'prefijo' => 'string',
			'ck_tienda' => 'string',
			'cs_tienda' => 'required|string',
			'url_tienda' => 'string',
			'activo' => 'string',
        ];
    }
}
