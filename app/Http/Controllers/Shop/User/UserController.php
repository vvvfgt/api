<?php

namespace App\Http\Controllers\Shop\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\User\StoreRequest;
use App\Http\Requests\Shop\User\UpdateRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
       $users = User::all();

       return view('shop.user.index', compact('users'));
    }

    public function create()
    {
        return view('shop.user.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        User::query()->firstOrCreate([
            'email' => $data['email']
        ], $data);

        return redirect()->route('user.index');
    }

    public function show(User $user)
    {
        return view('shop.user.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('shop.user.edit', compact('user'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);

        return view('shop.user.show', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index');
    }
}
