<?php

namespace App\Http\Controllers\Shop\Tag;

use App\Http\Controllers\Controller;
use App\Models\Shop\Tag;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('shop.tag.edit', compact('tag'));
    }
}
