<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('adminweb');
        $service = Service::all();
        return view('backoffice.4services.services', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('adminweb');
        return view('backoffice.4services.servicesCreate');
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
        $request->validate([
            
            "titre" => "required",
            "texte" => "required",
            

        ]);
        $service = new Service;
        $service->titre = $request->titre;
        $service->texte = $request->texte;
       
        $service->save();

        return redirect()->route('services.index')->with('message', 'Nouveau service ajouté avec succès');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        $this->authorize('adminweb');
        return view('backoffice.4services.servicesShow', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $this->authorize('adminweb');
        return view('backoffice.4services.servicesEdit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->authorize('adminweb');
        $this->authorize('update', $service);
        $request->validate([
            
            "titre" => "required",
            "texte" => "required",
            
        ]);
        
        $service->titre = $request->titre;
        $service->texte = $request->texte;
        
       
        $service->save();
        

        return redirect()->route('services.index')->with('message', 'Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->authorize('adminweb');
        $this->authorize('delete', $service);
        $service->delete();
        return redirect()->route('services.index')->with('message', 'service supprimé avec succès');
    }
}
