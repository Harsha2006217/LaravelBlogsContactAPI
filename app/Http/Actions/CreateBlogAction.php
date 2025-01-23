<?php

namespace App\Http\Actions;

use App\Models\Blog;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CreateBlogAction
{
    public function __invoke(array $data)
    {
        $validator = Validator::make($data, [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'image_name' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        if (isset($data['image_name'])) {
            $imagePath = $data['image_name']->store('images', 'public');
            $data['image_name'] = basename($imagePath);
        }

        return Blog::create($data);
    }
}
