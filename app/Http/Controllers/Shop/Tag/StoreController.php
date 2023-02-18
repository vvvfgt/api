<?php

namespace App\Http\Controllers\Shop\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\Tag\StoreRequest;
use App\Models\Shop\Tag;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Tag::query()->firstOrCreate($data);

        return redirect()->route('tag.index');
    }
}
