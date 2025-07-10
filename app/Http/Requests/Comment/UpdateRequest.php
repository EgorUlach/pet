<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            "post_id" => "required|string",
            "content" => "required|string",
            "profile_id" => "required|string",
            "status" => "required|string",
            "parent_id" => "required|string",
            "likes" => "required|integer",
        ];
    }
}
