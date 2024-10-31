<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
  
    public function index()
    {
        $users = User::query()->latest()->get();

        return view('users.user-setting', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->validate([
            'name' => ['Required', 'min:3', 'max:255', 'string'],
            'email' => ['Required', 'email', Rule::unique('users', 'email')],
            'Position' => ['Required', 'min:3', 'max:255', 'string'],
            'password' => ['Required', 'min:8'],
        ]));

        return redirect('/user-setting');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('/users/show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->validate([
            'name' => ['Required', 'min:3', 'max:255', 'string'],
            'email' => ['Required', 'email'],
            'Position' => ['Required', 'min:3', 'max:255', 'string'],
            'password' => ['Required', 'min:8'],
        ]));

        return redirect('/user-setting');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/user-setting');
    }
}
