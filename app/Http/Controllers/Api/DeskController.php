<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeskStoreRequest;
use App\Http\Resources\DeskResource;
use App\Models\Desk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;

class DeskController extends Controller
{
    public function index()
    {
        return DeskResource::collection(Desk::all());
    }

    public function store(DeskStoreRequest $request)
    {
        $created_desk = Desk::query()->create($request->validated());

        return new DeskResource($created_desk);
    }

    public function show(Desk $desk)
    {
        return new DeskResource($desk);
    }

    public function update(DeskStoreRequest $request, Desk $desk)
    {
        $desk->update($request->validated());

        return new DeskResource($desk);
    }

    public function destroy(Desk $desk)
    {
        $desk->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
