<?php

namespace App\Http\Actions;

use App\Models\Blog;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DeleteBlogAction
{
    public function __invoke(int $id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            throw new ModelNotFoundException('Blog not found');
        }

        $blog->delete();

        return ['message' => 'Blog deleted successfully'];
    }
}
