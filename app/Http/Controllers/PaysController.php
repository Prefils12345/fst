<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use Illuminate\Http\Request;

class PaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pays = Pays::all();
        return view("fst.pays.index",compact("pays"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pays = Pays::all();
        return view("fst.pays.create", compact("pays"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pays = new Pays();
           
        $pays->libelle_pays = $request->libelle_pays;
        $pays->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pays  $Pays
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pays = Pays::find($id);
        return view("fst.pays.show",compact("pays"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pays  $Pays
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pays = Pays::find($id);        
        if ($pays == NULL) {
            toastr()->warning("Aucune année sélectionée");
        }
        // $pays = Pays::all();
        return view('acsi.role.edit',compact("pays"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pays  $Pays
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pays = Pays::find($id);        
        if ($pays == NULL) {
            toastr()->warning("Aucune année sélectionée");
        }

        $pays->libelle_pays = $request->libelle_pays;
        $pays->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pays  $Pays
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pays = Pays::find($id);        
        if ($pays == NULL) {
            // toastr()->warning("Aucun rôle sélectioné");
            toastr("Aucune annéé sélectionée", 'warning');
        }
        $pays->delete();
    }
}
