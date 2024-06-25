<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHeroRequest extends FormRequest
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
     * @return array<string=> \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=> 'required',
            'description'=> 'required|min:1',
            'button_text_one'=> 'required|min:1',
            'button_text_two'=> 'required|min:1',
            'image'=> 'image|mimes:jpeg,jpg,png,gif',
        ];
    }
}
