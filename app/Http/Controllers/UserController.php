<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('backoffice.10users.user', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        $role = Role::all();
        return view('backoffice.10users.userCreate', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin');
        $this->authorize('create', User::class);
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
            "role_id" => "required"
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('users.index')->with('message', 'Utilisateur ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

        $role = Role::all();
        return view('backoffice.10users.userShow', compact('user', 'role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('admin');
        return view('backoffice.10users.userEdit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('admin');
        $this->authorize('update', $user);
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
            "role_id" => "required"
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('users.index')->with('message', 'Utilisateur modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('admin');
        $this->authorize('delete', $user);
        $user->delete();
        return redirect()->route('users.index')->with('message', 'Utilisateur supprimé avec succès');

    }
}
