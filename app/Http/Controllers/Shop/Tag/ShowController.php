<?php

namespace App\Http\Controllers\Shop\Tag;

use App\Http\Controllers\Controller;
use App\Models\Shop\Tag;

class ShowController extends Controller
{
    public function __invoke(Tag $tag)
    {
       return view('shop.tag.show', compact('tag'));
    }
}
