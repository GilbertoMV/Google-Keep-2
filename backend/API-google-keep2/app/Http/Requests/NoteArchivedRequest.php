<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteArchivedRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'page' => 'nullable|integer|min:1'
        ];
    }
}
