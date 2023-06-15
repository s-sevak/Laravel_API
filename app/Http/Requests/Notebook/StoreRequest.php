<?php

namespace App\Http\Requests\Notebook;

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
     * @return array
     */
    public function rules()
    {
        return [
            'Full_name' => 'required|string',
            'Company' => 'required|string',
            'Phone' => 'required|string',
            'Email' => 'required|string',
            'BirthDate' => 'required|string',
            'Photo' => 'required|string',
        ];
    }
}
