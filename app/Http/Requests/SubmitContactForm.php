<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitContactForm extends FormRequest
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
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'emailAddress' => 'required|email',
            'phoneNumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'mailSubject' => 'required|max:300',
            'mailMessage' => 'required|max:300'
        ];
    }
}
