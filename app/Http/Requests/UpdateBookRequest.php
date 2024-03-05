<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            "name"=>'required|max:1000',
            "text" => 'required|max:1200',
            "category"=>"required|numeric",
            "photo"=>"nullable|mimes:jpeg,jpg,png|max:10000",
            "book_pdf"=>"nullable|mimetypes:application/pdf|max:100000",
            "author"=>"required|numeric",
            "genre"=>"required|numeric",
            "years"=>"required|date"
        ];
    }
}
