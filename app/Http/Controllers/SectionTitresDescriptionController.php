<?php

namespace App\Http\Controllers;

use App\Models\SectionTitresDescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SectionTitresDescriptionController extends Controller
{
    public function index()
    {
        $this->authorize('adminweb');
        $titre = SectionTitresDescription::all();
        return view('backoffice.11titres.titre', compact('titre'));
    }

    public function edit($id)
    {
        $this->authorize('adminweb');
        $titre = SectionTitresDescription::find($id);
        return view('backoffice.11titres.titreEdit', compact('titre'));
    }

    public function update(Request $request, SectionTitresDescription $id)
    {
        $this->authorize('adminweb');
        $request->validate([
            "titreheader" => "required",
            "sous_titreheader" => "required",
            "boutonheader" => "required",
            "url"=>"required",
            "titreabout" => "required",
            "boutonabout" => "required",
            "titrefeatures" => "required",
            "sous_titrefeatures" => "required",
            "titreservice" => "required",
            "sous_titreservice" => "required",
            "titreportfolio" => "required",
            "sous_titreportfolio" => "required",
            "titretestimonials" => "required",
            "sous_titretestimonials" => "required",
            "titreteam" => "required",
            "sous_titreteam" => "required",
            "titrecontact" => "required",
            "sous_titrecontact" => "required"
            
        ]);
        $titre=$id;
        Storage::disk('public')->delete('img/'.$titre->url);

        
        $titre->titreheader = $request->titreheader;
        $titre->sous_titreheader = $request->sous_titreheader;
        $titre->boutonheader = $request->boutonheader;
        $titre->url = $request->file('url')->hashName();
        $titre->titreabout = $request->titreabout;
        $titre->boutonabout = $request->boutonabout;
        $titre->titrefeatures = $request->titrefeatures;
        $titre->sous_titrefeatures = $request->sous_titrefeatures;
        $titre->titreservice = $request->titreservice;
        $titre->sous_titreservice = $request->sous_titreservice;
        $titre->titreportfolio = $request->titreportfolio;
        $titre->sous_titreportfolio = $request->sous_titreportfolio;
        $titre->titretestimonials = $request->titretestimonials;
        $titre->sous_titretestimonials = $request->sous_titretestimonials;
        $titre->titreteam = $request->titreteam;
        $titre->sous_titreteam = $request->sous_titreteam;
        $titre->titrecontact = $request->titrecontact;
        $titre->sous_titrecontact = $request->sous_titrecontact;
        $titre->save();

        $request->file('url')->storePublicly('img', 'public');

        return redirect()->route('titre')->with('message', 'titre modifié avec succès');
    }
}
