<?php

namespace App\Http\Controllers;

use App\Models\Mention;
use Illuminate\Http\Request;

class MentionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentions = Mention::all();
        return view("fst.mention.index",compact("mentions"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mentions = Mention::all();
        return view("fst.mention.create", compact("mentions"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mention = new Mention();
           
        $mention->nom_mention = $request->nom_mention;	
        $mention->semaine = $request->semaine;	
        $mention->code = $request->code;	
        $mention->intitulé = $request->intitulé;	
        $mention->id_ue	 = $request->id_ue;
        $mention->type_formation = $request->type_formation;
        $mention->volc_par_ue = $request->volc_par_ue;	
        $mention->volc_par_sem = $request->volc_par_sem;
        $mention->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mention  $Mention
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mention = Mention::find($id);
        return view("fst.mention.show",compact("mention"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mention  $Mention
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mention = Mention::find($id);        
        if ($mention == NULL) {
            toastr()->warning("Aucune mention sélectionée");
        }
        $mentions = Mention::all();
        return view('acsi.role.edit',compact("mention","mentions"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mention  $Mention
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mention = Mention::find($id);        
        if ($mention == NULL) {
            toastr()->warning("Aucune mention sélectionée");
        }

        $mention->nom_mention = $request->nom_mention;	
        $mention->semaine = $request->semaine;	
        $mention->code = $request->code;	
        $mention->intitulé = $request->intitulé;	
        $mention->id_ue	 = $request->id_ue;
        $mention->type_formation = $request->type_formation;
        $mention->volc_par_ue = $request->volc_par_ue;	
        $mention->volc_par_sem = $request->volc_par_sem;

        $mention->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mention  $Mention
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mention = Mention::find($id);        
        if ($mention == NULL) {
            // toastr()->warning("Aucun rôle sélectioné");
            toastr("Aucune mention sélectionée", 'warning');
        }
        $mention->delete();
    }
}
