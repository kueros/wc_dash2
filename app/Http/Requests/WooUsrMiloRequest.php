<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WooUsrMiloRequest extends FormRequest
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
			'usr_milo' => 'required|string',
			'psw_milo' => 'required|string',
			'CustomerCode' => 'string',
			'FirstName' => 'string',
			'LastName' => 'string',
			'Telephone' => 'string',
			'Email' => 'string',
        ];
    }
}
