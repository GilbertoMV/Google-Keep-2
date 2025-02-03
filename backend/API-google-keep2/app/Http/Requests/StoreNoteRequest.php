<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNoteRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'   => 'required|String|max:255',
            'content' => 'required|String',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El titulo no puede estar vacío',
            'title.String' => 'El titulo debe ser texto',
            'title.max' => 'El titulo no puede exceder los 255 caracteres',
            'content.required' => 'El contenido no puede estar vacío',
            'content.String' => 'El contenido debe ser texto',
        ];
    }
}
