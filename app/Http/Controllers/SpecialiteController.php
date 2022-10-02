<?php

namespace App\Http\Controllers;

use App\Models\Specialite;
use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialites = Specialite::all();
        return view("fst.specialite.index",compact("specialites"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialites = Specialite::all();
        return view("fst.specialite.create", compact("specialites"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $specialite = new Specialite();           
        $specialite->nom_specialite = $request->nom_specialite;	
        $specialite->section = $request->section;	
        $specialite->cycle = $request->cycle;	
        $specialite->id_mention = $request->id_mention;
        $specialite->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specialite  $Specialite
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $specialite = Specialite::find($id);
        return view("fst.specialite.show",compact("specialite"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Specialite  $Specialite
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specialite = Specialite::find($id);        
        if ($specialite == NULL) {
            toastr()->warning("Aucune spécialité sélectionée");
        }
        $specialites = Specialite::all();
        return view('fst.specialite.edit',compact("specialite","specialites"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specialite  $Specialite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $specialite = Specialite::find($id);        
        if ($specialite == NULL) {
            toastr()->warning("Aucune spécialité sélectionée");
        }

        $specialite->nom_specialite = $request->nom_specialite;	
        $specialite->section = $request->section;	
        $specialite->cycle = $request->cycle;	
        $specialite->id_mention = $request->id_mention;
        $specialite->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specialite  $Specialite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specialite = Specialite::find($id);        
        if ($specialite == NULL) {
            // toastr()->warning("Aucun rôle sélectioné");
            toastr("Aucune spécialité sélectionée", 'warning');
        }
        $specialite->delete();
    }
}
