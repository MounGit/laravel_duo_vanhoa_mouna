<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footer = Footer::all();
        return view('backoffice.9footer.footer', compact('footer'));
    }

    public function edit($id)
    {
        $footer = footer::find($id);
        return view('backoffice.9footer.footerEdit', compact('footer'));
    }

    public function update(Request $request, footer $id)
    {
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
}
