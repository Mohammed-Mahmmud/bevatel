<?php

namespace App\Http\Requests;

use App\Models\Blog;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class BlogRequest extends FormRequest
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
        return [];
    }
    public function validationStore()
    {
        $request = Request();
        return Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required',
            'slug' => 'required|string|unique:blogs',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_id' => 'required',
        ]);
    }
    public function validationUpdate(Blog $blog)
    {
        $request = Request();
        return Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required',
            'slug' => 'required|string|unique:blogs,slug,' . $blog->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_id' => 'required|exists:users,id',
        ]);
    }
}
