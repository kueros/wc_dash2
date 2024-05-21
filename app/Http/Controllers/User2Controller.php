<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\User2Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class User2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $user2s = User::paginate();

        return view('user2.index', compact('user2s'))
            ->with('i', ($request->input('page', 1) - 1) * $user2s->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $user2 = new User();

        return view('user2.create', compact('user2'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(User2Request $request): RedirectResponse
    {
        User::create($request->validated());

        return Redirect::route('user2s.index')
            ->with('success', 'User2 created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $user2 = User::find($id);

        return view('user2.show', compact('user2'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $user2 = User::find($id);

        return view('user2.edit', compact('user2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User2Request $request, User $user2): RedirectResponse
    {
        $user2->update($request->validated());

        return Redirect::route('user2s.index')
            ->with('success', 'User2 updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        User::find($id)->delete();

        return Redirect::route('user2s.index')
            ->with('success', 'User2 deleted successfully');
    }
}
