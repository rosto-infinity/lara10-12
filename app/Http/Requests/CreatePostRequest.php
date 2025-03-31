<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:8'], // Règles pour le titre
            'slug' => ['required', 'min:8', 'regex:/^[0-9a-z\-]+$/', 'unique:posts'], // Règles pour le slug
            'content' => ['required', 'string', 'min:20'], // Règles pour le contenu
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => $this->input('slug') ?: Str::slug($this->input('title')),
            // 'slug' => Str::slug($this->input('title')),
        ]);
    }
}