<?php

namespace App\Http\Requests\Cable;

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
            'title'=>'required',
            'price'=>'required',
            'old_price'=>'required',
            'description'=>'required',
            'preview_image'=>'required',
            'type'=>'required'
        ];
    }
}
