<?php

namespace App\Http\Actions;

use App\Models\Blog;

class ReadAllBlogsAction
{
    public function __invoke()
    {
        return Blog::with('user')->get();
    }
}
