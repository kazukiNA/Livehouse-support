<?php

namespace OurLive\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CreateProjectRequest extends FormRequest
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
            
            'livehouse_name' =>'required',
            'target_amount'=>'required','integer',
            'apprication_end'=>['required','date','after:tomorrow'],
            'title' => ['required','max:30'],
            'description' =>['required','max:250'],
        ];
    }

    public function messages(){
        return [
            'livehouse_name.required' => 'ライブハウス名を入力してください',
            'target_amount.required' => '目標金額を入力してください',
            'apprication_end.required' => '支援終了日を入力してください',
            'apprication_end.after' => '明日以降の日付を指定してください',
            'title.required' => 'タイトルを入力してください',
            'title.max' => 'タイトルは30字以内でお願いします。',
            'description.required' => '概要文を入力してください',
            'description.max' => '概要文は30字以内でお願いします。',
        ];
    }
}
