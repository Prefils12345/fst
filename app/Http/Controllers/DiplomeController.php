<?php

namespace App\Http\Controllers;

use App\Models\Diplome;
use Illuminate\Http\Request;

class DiplomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diplomes = Diplome::all();
        return view("fst.diplome.index",compact("diplomes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diplomes = Diplome::all();
        return view("fst.diplome.create", compact("diplomes"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diplome = new Diplome();
           
        $diplome->libelle_diplome = $request->libelle_diplome;
        $diplome->serie = $request->serie;
        $diplome->mention = $request->mention;
        $diplome->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diplome  $Diplome
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diplome = Diplome::find($id);
        return view("fst.diplome.show",compact("diplome"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diplome  $Diplome
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diplome = Diplome::find($id);        
        if ($diplome == NULL) {
            toastr()->warning("Aucun diplôùe sélectionée");
        }
        $diplomes = Diplome::all();
        return view('acsi.role.edit',compact("diplome","diplomes"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diplome  $Diplome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $diplome = Diplome::find($id);        
        if ($diplome == NULL) {
            toastr()->warning("Aucun diplôùe sélectionée");
        }

        $diplome->libelle_diplome = $request->libelle_diplome;
        $diplome->serie = $request->serie;
        $diplome->mention = $request->mention;
        $diplome->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diplome  $Diplome
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diplome = Diplome::find($id);        
        if ($diplome == NULL) {
            // toastr()->warning("Aucun rôle sélectioné");
            toastr("Aucune annéé sélectionée", 'warning');
        }
        $diplome->delete();
    }
}
