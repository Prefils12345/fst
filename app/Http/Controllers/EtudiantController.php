<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Pays;
use App\Models\Niveau;
use App\Models\Diplome;
use App\Models\Etudiant;
use App\Models\Formation;
use Illuminate\Http\File;
use App\Models\Souscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view("fst.preinscription.index",compact("etudiants"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etudiants = Etudiant::all();
        $niveaus = Niveau::all();
        $formations = Formation::all();
        $diplomes = Diplome::all();
        $pays = Pays::all();
        return view("fst.preinscription.create", compact("etudiants","pays","niveaus","formations","diplomes"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $fileNameToStore = $request->file("releve_1");

        // $path = $request->file($fileNameToStore)->storeAs('public/fichiers',$fileNameToStore);
        // $path = Storage::putFile("fichiers",$fileNameToStore, []);
        // $path = $request->file($fileNameToStore)->store("public/fichiers",[]);
        // Storage::makeDirectory("local/Etudiant");
        // $path = Storage::putFile('fichiers', $request->file($fileNameToStore),$fileNameToStore->hashName());
        //$path = Storage::putFile("fichiers", new File($fileNameToStore),"public");
        // $path = Storage::putFileAs(storage_path("fichiers"), $request->file("releve_1"),time());
        $path = Storage::disk("public")->put("fichiers.pdf", file_get_contents($request->releve_1));
        // $path = $request->file("releve_1")->store('fichiers');

        dd($path);

        try {
            $etudiant = new Etudiant();
            
            $num = time();
            $etudiant->nie_etudiant	= $num;
            $etudiant->nom_etudiant = $request->nom_etudiant;	
            $etudiant->prenom_etudiant = $request->prenom_etudiant	;
            $etudiant->adresperso_etudiant = $request->adresperso_etudiant;	
            $etudiant->mail_etudiant = $request->mail_etudiant;	
            $etudiant->tel_etudiant	= $request->tel_etudiant;
            $etudiant->id_pays = $request->id_pays;	
            $etudiant->id_niveau = $request->id_niveau;	
            $etudiant->id_diplome = $request->id_diplome;	
            $etudiant->demande_inscription = $request->demande_inscription;	
            $etudiant->releve_bac = $request->releve_bac;	
            $etudiant->dernier_diplome = $request->dernier_diplome;	
            $etudiant->piece_etat_civil	= $request->piece_etat_civil;
            $etudiant->cni_passport = $request->cni_passport;
            $etudiant->statut = $request->statut;

            $etudiant->releve_1 = $request->releve_1;	
            $etudiant->releve_2	= $request->releve_2;
            $etudiant->releve_3 = $request->releve_3;	
            
        
            $etudiant->save();
            // $idetudiant = $etudiant->id_etudiant;
            $dernieretudiant = Etudiant::OrderBy("id", "DESC")->take(1)->first();

            // Insertion dans la table souscription
            $souscription = new Souscription();
            $souscription->id_formation = $request->id_formation;
            $souscription->observation = "ObS";
            $souscription->id_etudiant = $dernieretudiant->id;
            $souscription->id_annee = 1;
            $souscription->save();

            toastr()->info("Préinscription éffectué");
            return redirect()->back();
        } catch (Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etudiant = Etudiant::find($id);
        return view("fst.preinscription.show",compact("etudiant"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant = Etudiant::find($id);        
        if ($etudiant == NULL) {
            toastr()->warning("Aucun diplôùe sélectionée");
        }
        $etudiants = Etudiant::all();
        return view('fst.preinscription.edit',compact("etudiant","etudiants"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::find($id);        
        if ($etudiant == NULL) {
            toastr()->warning("Aucun étudiant sélectioné");
        }

        try {
            $etudiant->nie_etudiant	= $request->nie_etudiant	;
            $etudiant->nom_etudiant = $request->nom_etudiant;	
            $etudiant->prenom_etudiant = $request->prenom_etudiant	;
            $etudiant->adresperso_etudiant = $request->adresperso_etudiant;	
            $etudiant->mail_etudiant = $request->mail_etudiant;	
            $etudiant->tel_etudiant	= $request->tel_etudiant;
            $etudiant->id_pays = $request->id_pays;	
            $etudiant->id_niveau = $request->id_niveau;	
            $etudiant->id_diplome = $request->id_diplome;	
            $etudiant->demande_inscription = $request->demande_inscription;	
            $etudiant->releve_bac = $request->releve_bac;	
            $etudiant->dernier_diplome = $request->dernier_diplome;	
            $etudiant->piece_etat_civil	= $request->piece_etat_civil;
            $etudiant->cni_passport = $request->cni_passport;	
            $etudiant->releve_1 = $request->releve_1;	
            $etudiant->releve_2	= $request->releve_2;
            $etudiant->releve_3 = $request->releve_3;	
            $etudiant->statut = $request->statut;
        
            $etudiant->save();
        } catch (Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etudiant = Etudiant::find($id);        
        if ($etudiant == NULL) {
            // toastr()->warning("Aucun rôle sélectioné");
            toastr("Aucune étudiant sélectioné", 'warning');
        }
        $etudiant->delete();
    }
}
