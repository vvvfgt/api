<?php

namespace App\Http\Controllers\Shop\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\Tag\UpdateRequest;
use App\Models\Shop\Tag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);

        return view('shop.tag.show', compact('tag'));
    }
}
