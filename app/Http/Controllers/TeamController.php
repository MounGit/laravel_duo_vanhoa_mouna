<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('adminweb');
        $team=Team::all();
        return view('backoffice.7team.team',compact('team')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('adminweb');
        return view('backoffice.7team.teamCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('adminweb');
        $this->authorize('create', Team::class);
        $request->validate([
            
            "nom" => "required",
            "metier" => "required",
            "image" => "required",

        ]);
        $team = new Team;
        $team->nom = $request->nom;
       
        $team->metier = $request->metier;
        
        $team->image = $request->file("image")->hashName();
        $team->save();

        $request->file('image')->storePublicly('img', 'public');
        return redirect()->route('teams.index')->with('message', 'Nouveau Team ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        $this->authorize('adminweb');
        return view('backoffice.7team.teamShow', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $this->authorize('adminweb');
        return view('backoffice.7team.teamEdit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $this->authorize('adminweb');
        $this->authorize('update', $team);
        $request->validate([
            
            "nom" => "required",
            "metier" => "required",
            "image" => "required",
        ]);
        Storage::disk("public")->delete("img/" . $team->image);
        $team->nom = $request->nom;
        $team->metier = $request->metier;
        
        $team->image = $request->file("image")->hashName();
        $team->save();
        $request->file('image')->storePublicly('img', 'public');

        return redirect()->route('teams.index')->with('message', 'Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $this->authorize('delete', $team);
        $this->authorize('adminweb');
        Storage::disk('public')->delete('img/'. $team->url);
        $team->delete();
        return redirect()->route('teams.index')->with('message', 'team supprimé avec succès');
    }
}
