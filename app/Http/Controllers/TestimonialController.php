<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial=Testimonial::all();
        return view('backoffice.6testimonials.testimonials',compact('testimonial')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.6testimonials.testimonialsCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Testimonial::class);
        $request->validate([
            "description" => "required",
            "nom" => "required",
            "metier" => "required",
            "image" => "required",

        ]);
        $testimonial = new Testimonial;
        
        $testimonial->nom = $request->nom;
        $testimonial->metier = $request->metier;
        $testimonial->description = $request->description;
        $testimonial->image = $request->file("image")->hashName();
        $testimonial->save();

        $request->file('image')->storePublicly('img', 'public');
        return redirect()->route('testimonials.index')->with('message', 'Nouveau Temoignage ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('backoffice.6testimonials.testimonialsShow', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('backoffice.6testimonials.testimonialsEdit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $this->authorize('update', $testimonial);
        $request->validate([
            "description" => "required",
            "nom" => "required",
            "metier" => "required",
            "image" => "required",
        ]);
        Storage::disk("public")->delete("img/" . $testimonial->image);
        $testimonial->nom = $request->nom;
        $testimonial->metier = $request->metier;
        $testimonial->description = $request->description;
        $testimonial->image = $request->file("image")->hashName();
        $testimonial->save();
        $request->file('image')->storePublicly('img', 'public');

        return redirect()->route('testimonials.index')->with('message', 'Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $this->authorize('delete', $testimonial);
        Storage::disk('public')->delete('img/'. $testimonial->url);
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('message', 'temoignage supprimé avec succès');
    }
}
