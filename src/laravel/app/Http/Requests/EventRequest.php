<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            //  種目の部位、名、は必須
            'event_part' => 'required|string|max:10',
            'event_name' => 'required|string|max:30',
            'event_explanation' => 'required|string|max:200'
        ];
    }
}
