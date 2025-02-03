<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNoteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'   => 'sometimes|string|max:255',
            'content' => 'sometimes|string',
        ];
    }

    public function messages()
    {
        return [
            'title.String' => 'El titulo debe ser texto',
            'title.max' => 'El titulo no puede exceder los 255 caracteres',
            'content.String' => 'El contenido debe ser texto',
        ];
    }
}
