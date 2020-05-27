<?php

namespace OurLive\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRewardRequest extends FormRequest
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
            
            'reward1_price' =>'required',
            'reward1_content'=>['required','max:250'],
            'reward2_content'=>'max:250',
            'reward3_content'=>'max:250'
        ];
    }

    public function messages(){
        return [
            'reward1_price' => 'リターン金額を入力してください',
            'reward1_content' => 'リターン内容を入力してください',
            'reward1_content' => 'リターン内容は250字以内でお願いします。',
            'reward2_content' => 'リターン内容は250字以内でお願いします。',
            'reward3_content' => 'リターン内容は250字以内でお願いします。',
        ];
    }
}
