<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('backoffice.5portfolio.portfolio', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.5portfolio.portfolioCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Portfolio::class);
        $request->validate([
            "url" => "required",
            "name" => "required",
            "category" => "required"
        ]);

        $portfolio = new Portfolio;
        $portfolio->url = $request->file('url')->hashName();
        $portfolio->name = $request->name;
        $portfolio->category = $request->category;
        $portfolio->save();

        $request->file('url')->storePublicly('img', 'public');

        return redirect()->route('portfolios.index')->with('message', 'Elément ajouté au portfolio avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('backoffice.5portfolio.portfolioShow', compact('portfolio'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('backoffice.5portfolio.portfolioEdit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $this->authorize('update', $portfolio);
        $request->validate([
            "url" => "required",
            "name" => "required",
            "category" => "required"
        ]);
        
        Storage::disk('public')->delete('img/'.$portfolio->url);

        $portfolio->url = $request->file('url')->hashName();
        $portfolio->name = $request->name;
        $portfolio->category = $request->category;
        $portfolio->save();

        $request->file('url')->storePublicly('img', 'public');

        return redirect()->route('portfolios.index')->with('message', 'Elément du portfolio modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $this->authorize('destroy', $portfolio);
        Storage::disk('public')->delete('img/'.$portfolio->url);
        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('message', 'Elément supprimé avec succès');

    }
}
