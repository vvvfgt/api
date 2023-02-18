<?php

namespace App\Http\Controllers\Shop\Tag;

use App\Http\Controllers\Controller;
use App\Models\Shop\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::all();
        return view('shop.tag.index', compact('tags'));
    }
}
