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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $event = $this->route()->parameter('post'); //Si lo que le mando es por el método POST

        $rules = [
            'title' => 'required',
            'slug' => 'required|unique:events',
            'body' => 'required',
            'file' => 'image'
        ];

        if ($event) {
            $rules['slug'] = 'required|unique:events,slug,'.$event->id;
        }
        
        return $rules;
    }
}
