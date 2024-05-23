<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigRequest extends FormRequest
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
			'urlroot' => 'required|string',
			'cli_id' => 'required|string',
			'cli_pass' => 'required|string',
			're_dir_url' => 'required|string',
			'fi_logs' => 'required|string',
			'scope' => 'required|string',
			'callback_url_carrier' => 'required|string',
			'webhook_address_orders_create' => 'required|string',
			'webhook_address_orders_paid' => 'required|string',
			'webhook_address_orders_cancelled' => 'required|string',
			'api_u' => 'required|string',
			'api_p' => 'required|string',
			'shop_test' => 'required|string',
        ];
    }
}
