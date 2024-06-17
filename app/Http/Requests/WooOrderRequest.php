<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WooOrderRequest extends FormRequest
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
			'id_tienda' => 'required|string',
			'order_id' => 'required|string',
			'index_id' => 'required|string',
			'order_nro' => 'required|string',
			'fechacre' => 'required|string',
			'tstamp' => 'required',
			'respcode' => 'required|string',
			'status' => 'required|string',
			'resmessage' => 'required|string',
			'trackid' => 'required|string',
			'shipment_id' => 'required|string',
			'print_url' => 'required|string',
			'code' => 'required|string',
			'email' => 'required|string',
			'idstore' => 'string',
			'financial_status' => 'required|string',
        ];
    }
}
