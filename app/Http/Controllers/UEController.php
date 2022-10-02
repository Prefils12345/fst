<?php

namespace App\Http\Controllers;

use App\Models\UE;
use Illuminate\Http\Request;

class UEController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ues = UE::all();
        return view("fst.ue.index",compact("ues"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ues = UE::all();
        return view("fst.ue.create", compact("ues"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ue = new UE();
           
        $ue->libelle_ue = $request->libelle_ue;
        $ue->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UE  $UE
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ue = UE::find($id);
        return view("fst.ue.show",compact("ue"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UE  $UE
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ue = UE::find($id);        
        if ($ue == NULL) {
            toastr()->warning("Aucune ue sélectionée");
        }
        $ues = UE::all();
        return view('fst.ue.edit',compact("ue","ues"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UE  $UE
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ue = UE::find($id);        
        if ($ue == NULL) {
            toastr()->warning("Aucune ue sélectionée");
        }

        $ue->libelle_ue = $request->libelle_ue;
        $ue->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UE  $UE
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ue = UE::find($id);        
        if ($ue == NULL) {
            // toastr()->warning("Aucun rôle sélectioné");
            toastr("Aucune ue sélectionée", 'warning');
        }
        $ue->delete();
    }
}
