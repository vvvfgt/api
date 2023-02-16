<?php

namespace App\Http\Controllers\Shop\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\Category\UpdateRequest;
use App\Models\Shop\Category;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);

        return view('shop.category.show', compact('category'));
    }
}
