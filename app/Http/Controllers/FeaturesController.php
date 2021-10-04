<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('adminweb');
        $feature = Feature::all();
        return view('backoffice.3features.feature', compact('feature'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('adminweb');

        return view('backoffice.3features.featureCreate');
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
        $this->authorize('create', Feature::class);
        $request->validate([
            "url" => "required",
            "title" => "required",
            "description" => "required",
            "p1" => "required",
            "p2" => "required",
            "p3" => "required"
        ]);
        $features = new Feature;
        $features->url = $request->file('url')->hashName();
        $features->title = $request->title;
        $features->description = $request->description;
        $features->p1 = $request->p1;
        $features->p2 = $request->p2;
        $features->p3 = $request->p3;
        $features->save();

        $request->file('url')->storePublicly('img', 'public');
        return redirect()->route('features.index')->with('message', 'Elément ajouté avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $features
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        $this->authorize('adminweb');
        return view('backoffice.3features.featureShow', compact('feature'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $features
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        $this->authorize('adminweb');
        return view('backoffice.3features.featureEdit', compact('feature'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $features
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        $this->authorize('adminweb');
        $this->authorize('update', $feature);
        $request->validate([
            "url" => "required",
            "title" => "required",
            "description" => "required",
            "p1" => "required",
            "p2" => "required",
            "p3" => "required"
        ]);

        Storage::disk('public')->delete('img/'. $feature->url);

        $feature->url = $request->file('url')->hashName();
        $feature->title = $request->title;
        $feature->description = $request->description;
        $feature->p1 = $request->p1;
        $feature->p2 = $request->p2;
        $feature->p3 = $request->p3;
        $feature->save();

        $request->file('url')->storePublicly('img', 'public');

        return redirect()->route('features.index')->with('message', 'Elément modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $features
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        $this->authorize('adminweb');
        
        $this->authorize('delete', $feature);
        Storage::disk('public')->delete('img/'. $feature->url);
        $feature->delete();

        return redirect()->route('features.index')->with('message', 'Elément supprimé avec succès');

    }
}
