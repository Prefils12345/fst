<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations= Formation::all();
        return view("fst.formation.index",compact("formations"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formations= Formation::all();
        return view("fst.formation.create", compact("formations"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formation = new Formation();
        	
        $formation->labelformation = $request->labelformation;
        $formation->id_specialite = $request->id_specialite;
        $formation->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formation  $Formation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formation = Formation::find($id);
        return view("fst.formation.show",compact("formation"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formation  $Formation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formation = Formation::find($id);        
        if ($formation == NULL) {
            toastr()->warning("Aucune formation sélectionée");
        }
        $formations= Formation::all();
        return view('acsi.role.edit',compact("formation","formations"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formation  $Formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formation = Formation::find($id);        
        if ($formation == NULL) {
            toastr()->warning("Aucune formation sélectionée");
        }

        $formation->labelformation = $request->labelformation;
        $formation->id_specialite = $request->id_specialite;
        $formation->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formation  $Formation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formation = Formation::find($id);        
        if ($formation == NULL) {
            // toastr()->warning("Aucun rôle sélectioné");
            toastr("Aucune formation sélectionée", 'warning');
        }
        $formation->delete();
    }
}
