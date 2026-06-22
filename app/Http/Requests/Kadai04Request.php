<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Kadai04Request extends FormRequest
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


                'name'  => ['required'],
                'email' => [
                    'required',
                    'email'
                ],
                'note'=>['required']
 ];
    }
public function messages()
{
return[
    'name.required'=>'名前が入力されていません',
       'email.required'=>'メールアドレスが入力されていません',
       'email.email'=>'メイルアドレスの形式が間違っています',
          'note.required'=>'内容が入力されていません',

];

    }
}
