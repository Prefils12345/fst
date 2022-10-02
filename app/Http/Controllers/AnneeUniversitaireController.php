<?php

namespace App\Http\Controllers;

use App\Models\AnneeUniversitaire;
use Illuminate\Http\Request;

class AnneeUniversitaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annees = AnneeUniversitaire::all();
        return view("fst.annee.index",compact("annees"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $annees = AnneeUniversitaire::all();
        return view("fst.annee.create", compact("annees"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $annee = new AnneeUniversitaire();
           
        $annee->libelle_anneeuniv = $request->libelle_anneeuniv;
        $annee->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnneeUniversitaire  $anneeUniversitaire
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $annee = AnneeUniversitaire::find($id);
        return view("fst.annee.show",compact("annee"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnneeUniversitaire  $anneeUniversitaire
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $annee = AnneeUniversitaire::find($id);        
        if ($annee == NULL) {
            toastr()->warning("Aucune année sélectionée");
        }
        $annees = AnneeUniversitaire::all();
        return view('acsi.role.edit',compact("annee","annees"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnneeUniversitaire  $anneeUniversitaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $annee = AnneeUniversitaire::find($id);        
        if ($annee == NULL) {
            toastr()->warning("Aucune année sélectionée");
        }

        $annee->libelle_anneeuniv = $request->libelle_anneeuniv;
        $annee->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnneeUniversitaire  $anneeUniversitaire
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $annee = AnneeUniversitaire::find($id);        
        if ($annee == NULL) {
            // toastr()->warning("Aucun rôle sélectioné");
            toastr("Aucune annéé sélectionée", 'warning');
        }
        $annee->delete();
    }
}
