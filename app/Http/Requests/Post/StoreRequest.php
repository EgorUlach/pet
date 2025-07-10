<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title" => "required|string",
            "content" => "required|string",
            "profile_id" => "required|string",
            "is_published" => "nullable|boolean",
            "category_id" => "required|string",
            "like" => "required|integer",
            "image_path" => "nullable|string|unique:posts,image_path",
            "tag_id" => "required|string",
            "views" => "required|integer",
            "published_at" => "required|date_format:Y-m-d",
        ];
    }
}