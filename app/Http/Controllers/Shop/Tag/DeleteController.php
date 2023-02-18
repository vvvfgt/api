<?php

namespace App\Http\Controllers\Shop\Tag;

use App\Http\Controllers\Controller;
use App\Models\Shop\Tag;

class DeleteController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tag.index');
    }
}
