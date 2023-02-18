<?php

namespace App\Http\Requests\Service\Application;

use Illuminate\Foundation\Http\FormRequest;
use nickurt\Akismet\Rules\AkismetRule;

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
            'subject' => 'required|string',
            'email' => 'required|string|email',
            'message' => 'required',
            'akismet' => [new AkismetRule(
                request()->input('email'), request()->input('message')
            )]
        ];
    }
}
