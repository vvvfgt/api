<?php

namespace App\Http\Controllers\Shop\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('shop.tag.create');
    }
}
