<?php

namespace OurLive\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'checkbox' => 'required',
        ];
    }

    public function messages(){
        return [
            'checkbox.required' => 'リターンは最低一つ選んでください',
        ];
    }
}
