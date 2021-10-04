<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\FooterDroite;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $this->authorize('adminweb');
        $footerdroite=FooterDroite::all();
        $footer = Footer::all();
        return view('backoffice.9footer.footer', compact('footer','footerdroite'));
    }

    public function edit($id)
    {
        $this->authorize('adminweb');
        $footer = Footer::find($id);
        
        return view('backoffice.9footer.footerEdit', compact('footer'));
    }

    public function editPlus($id)
    {
        $this->authorize('adminweb');
        
        $footerdroite=FooterDroite::find($id);
        return view('backoffice.9footer.footerEditplus', compact('footerdroite'));
    }

    public function update(Request $request,  Footer $id)
    {
        
        $this->authorize('adminweb');
        $this->authorize('update', $id);
        $request->validate([
            "titre" => "required",
            "link1" => "required",
            "link2" => "required",
            "link3" => "required",
            "link4" => "required",
            "link5" => "required",
            
            
        ]);
        
        

        $footer=$id;
        
        $footer->titre = $request->titre;
        $footer->link1 = $request->link1;
        $footer->link2 = $request->link2;
        $footer->link3 = $request->link3;
        $footer->link4 = $request->link4;
        $footer->link5 = $request->link5;
      
        $footer->save();

        

        return redirect()->route('footer')->with('message', 'footer modifié avec succès');
    }

    public function updateDroite(Request $request,  FooterDroite $id)
    {
        
        $this->authorize('adminweb');
        $this->authorize('update', $id);
        $request->validate([
            "titreplus" => "required",
            "description" => "required",
            "copyright" => "required",
            
            
            
        ]);
        
        

        $footerdroite=$id;
        
        $footerdroite->titreplus = $request->titreplus;
        $footerdroite->description = $request->description;
        $footerdroite->copyright = $request->copyright;
        
        $footerdroite->save();

        

        return redirect()->route('footer')->with('message', 'footer modifié avec succès');
    }
}
