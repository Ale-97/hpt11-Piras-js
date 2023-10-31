<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:50',
            'category_id' => 'required',
            'description' => 'required|max:250',
            'body' => 'required|max:5000',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il campo Titolo non può essere vuoto.',
            'title.max' => 'Il campo Titolo non può essere più lungo di :max caratteri',
            'category.required' => 'Il campo Categoria non può essere vuoto.',
            'category.max' => 'Il campo Categoria non può essere più lungo di :max caratteri',
            'body.required' => "Il campo Corpo dell articolo non può essere vuoto.",
            'body.max' => 'Il campo Categoria non può essere più lungo di :max caratteri',
            'category_id.required' => 'Il campo Categoria non può essere vuoto.',
        ];
    }
}
