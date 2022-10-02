<?php

namespace App\Http\Controllers;

use App\Models\Souscription;
use Illuminate\Http\Request;

class SouscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $souscriptions = Souscription::all();
        return view("fst.souscription.index",compact("souscriptions"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $souscriptions = Souscription::all();
        return view("fst.souscription.create", compact("souscriptions"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $souscription = new Souscription();
           
        $souscription->observation = $request->observation;	
        $souscription->id_etudiant = $request->id_etudiant;	
        $souscription->id_formation = $request->id_formation;	
        $souscription->id_annee = $request->id_annee;
        $souscription->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Souscription  $Souscription
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $souscription = Souscription::find($id);
        return view("fst.souscription.show",compact("souscription"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Souscription  $Souscription
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $souscription = Souscription::find($id);        
        if ($souscription == NULL) {
            toastr()->warning("Aucune souscription sélectionée");
        }
        $souscriptions = Souscription::all();
        return view('fst.souscription.edit',compact("souscriptions","souscription"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Souscription  $Souscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $souscription = Souscription::find($id);        
        if ($souscription == NULL) {
            toastr()->warning("Aucune souscription sélectionée");
        }

        $souscription->observation = $request->observation;	
        $souscription->id_etudiant = $request->id_etudiant;	
        $souscription->id_formation = $request->id_formation;	
        $souscription->id_annee = $request->id_annee;
        $souscription->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Souscription  $Souscription
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $souscription = Souscription::find($id);        
        if ($souscription == NULL) {
            // toastr()->warning("Aucun rôle sélectioné");
            toastr("Aucune souscription sélectionée", 'warning');
        }
        $souscription->delete();
    }
}
