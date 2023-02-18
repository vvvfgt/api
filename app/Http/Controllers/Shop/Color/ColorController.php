<?php

namespace App\Http\Controllers\Shop\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\Color\StoreRequest;
use App\Http\Requests\Shop\Color\UpdateRequest;
use App\Models\Shop\Color;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();

        return view('shop.color.index', compact('colors'));
    }

    public function create()
    {
        return view('shop.color.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Color::query()->firstOrCreate($data);

        return redirect()->route('color.index');
    }

    public function show(Color $color)
    {
        return view('shop.color.show', compact('color'));
    }

    public function edit(Color $color)
    {
        return view('shop.color.edit', compact('color'));
    }

    public function update(UpdateRequest $request, Color $color)
    {
        $data = $request->validated();
        $color->update($data);

        return view('shop.color.show', compact('color'));
    }

    public function destroy(Color $color)
    {
        $color->delete();

        return redirect()->route('color.index');
    }
}
