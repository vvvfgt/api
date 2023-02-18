<?php

namespace App\Http\Controllers\Shop\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\Category\StoreRequest;
use App\Models\Shop\Category;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Category::query()->firstOrCreate($data);

        return redirect()->route('category.index');
    }
}
