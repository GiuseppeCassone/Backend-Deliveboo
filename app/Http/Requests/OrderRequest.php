<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            
            // 'token' => 'required',
            // 'amount' => 'required',
            // 'customer_name' => 'required',
            // 'customer_lastname' => 'required',
            // 'customer_email' => 'required|email',
            // 'customer_address' => 'required',
            // 'customer_phone' => 'required|max:10',
            // 'order_total' => 'required',

        ];
    }
}
