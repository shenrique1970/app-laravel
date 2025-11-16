<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateSupport extends FormRequest
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
        $rules = [
            'assunto' => 'required|min:3|max:255|unique:supports',
            'conteudo' => [
                'required',
                'min:3',
                'max:100000',
            ],
        ];

        if ($this->method() === 'PUT') {
            $rules['assunto'] = [
                'required',
                'min:3',
                'max:255',
                //"unique:supports,assunto,{$this->id},id",
                Rule::unique('supports')->ignore($this->id),
            ];
        }
        return $rules;
    }
}
