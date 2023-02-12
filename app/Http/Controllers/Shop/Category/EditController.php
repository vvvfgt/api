<?php

namespace App\Http\Controllers\Shop\Category;

use App\Http\Controllers\Controller;
use App\Models\Shop\Category;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Category $category)
    {
        return view('shop.category.edit', compact('category'));
    }
}
