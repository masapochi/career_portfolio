<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
        $this->redirect = url()->previous() . '#contact';
        return [
            'name'    => 'required|max:100',
            'email'   => 'required|email:rfc|max:100',
            'subject' => 'required|max:255',
            'message' => 'required|max:510',
        ];
    }
}
