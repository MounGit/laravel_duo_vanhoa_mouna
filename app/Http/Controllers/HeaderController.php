<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index () {
        $this->authorize('adminweb');
        $header = Header::all();
        return view('backoffice.1header.header', compact('header'));
    }

    public function edit (Header $id) {
        $this->authorize('adminweb');
        $header = $id;
        return view('backoffice.1header.headerEdit', compact('header'));
    }

    public function update (Request $request, Header $id) {
        $this->authorize('adminweb');
        $header = $id;
        $this->authorize('update', $header);
        $request->validate([
            "name" => "required",
            "nav1" => "required",
            "nav2" => "required",
            "nav3" => "required",
            "nav4" => "required",
            "nav5" => "required",
            "nav6" => "required",
            "nav7" => "required"
        ]);

        $header->name = $request->name;
        $header->nav1 = $request->nav1;
        $header->nav2 = $request->nav2;
        $header->nav3 = $request->nav3;
        $header->nav4 = $request->nav4;
        $header->nav5 = $request->nav5;
        $header->nav6 = $request->nav6;
        $header->nav7 = $request->nav7;
        $header->save();
        
        return redirect()->route('headers.index')->with('message', 'Barre de navigation modifiée avec succès');
    }
}
