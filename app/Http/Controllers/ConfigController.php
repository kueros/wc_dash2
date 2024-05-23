<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ConfigRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $configs = Config::paginate();

        return view('config.index', compact('configs'))
            ->with('i', ($request->input('page', 1) - 1) * $configs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $config = new Config();

        return view('config.create', compact('config'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConfigRequest $request): RedirectResponse
    {
        Config::create($request->validated());

        return Redirect::route('configs.index')
            ->with('success', 'Config created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $config = Config::find($id);

        return view('config.show', compact('config'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $config = Config::find($id);

        return view('config.edit', compact('config'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ConfigRequest $request, Config $config): RedirectResponse
    {
        $config->update($request->validated());

        return Redirect::route('configs.index')
            ->with('success', 'Config updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Config::find($id)->delete();

        return Redirect::route('configs.index')
            ->with('success', 'Config deleted successfully');
    }
}
