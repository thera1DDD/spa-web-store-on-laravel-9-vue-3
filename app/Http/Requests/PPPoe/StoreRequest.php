<?php

namespace App\Http\Requests\PPPoe;

use Illuminate\Foundation\Http\FormRequest;
use function Symfony\Component\Translation\t;

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
            'count'=>'required',
            'capacity'=>'required',
            'port'=>'required',
            'preview_image'=>'required',
        ];
    }
}
