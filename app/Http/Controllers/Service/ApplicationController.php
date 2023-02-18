<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\Application\StoreRequest;
use App\Models\Service\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all();

        return view('service.application.index', compact('applications'));
    }

    public function create()
    {
        return view('service.application.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        Application::create($data);

        return redirect()->route('applications.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
