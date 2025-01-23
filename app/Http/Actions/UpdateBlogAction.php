<?php

namespace App\Http\Actions;

use App\Models\Blog;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UpdateBlogAction
{
    public function __invoke(int $id, array $data)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            throw new \Exception('Blog not found');
        }

        $validator = Validator::make($data, [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_name' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        if (isset($data['image_name'])) {
            $imagePath = $data['image_name']->store('images', 'public');
            $data['image_name'] = basename($imagePath);
        }

        $blog->update($data);

        return $blog;
    }
}
