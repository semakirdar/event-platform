<?php

namespace App\Http\Requests\Events;

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
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
            'location' => 'required',
            'category_id' => 'required',

        ];
    }
}
