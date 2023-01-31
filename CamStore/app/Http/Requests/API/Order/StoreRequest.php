<?php

namespace App\Http\Requests\API\Order;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username'=>'nullable|string',
            'phone_number'=>'nullable|string',
            'image_url'=>'nullable|string',
            'product_name'=>'nullable|string',
            'price'=>'nullable|string',
            'quantity'=>'nullable|string',
            'subtotal'=>'nullable|string',
            'total'=>'nullable|integer',
        ];
    }
}
