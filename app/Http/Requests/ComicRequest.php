<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|min:5|max:100',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url',
            'price' => 'required|between:0.01,9999.99|decimal:2',
            'series' => 'required|string|max:100',
            'sale_date' => 'required|date|before:tomorrow',
            'type' => 'required|string|max:50'
        ];
    }
}
