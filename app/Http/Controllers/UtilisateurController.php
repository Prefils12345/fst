<?php

namespace App\Http\Controllers;


use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view("fst.users.index",compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("fst.users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            "nom_users"=>["required","string"],
            "tel_users"=>["required","string"],
            "login_users"=>["required","string"],
            "pwd_users"=>["required","string"],
        ]);

        DB::beginTransaction();

        try {
            $users = new User();
            $users->nom_users = $request->nom_users;
            $users->prenom_users = $request->prenom_users;
            $users->tel_users = $request->tel_users;
            $users->email_users = $request->email_users;
            $users->profil_users = $request->profil_users;
            $users->login_users = $request->login_users;
            $users->pwd_users = Hash::make($request->pwd_users);

           
            $users->save();

            DB::commit();

            toastr()->success("Création avec succès");
            return redirect()->route("user.create");

        } catch (Exception $e) {
            DB::rollBack();
            toastr()->error($e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request){
        $login = $request->login_users;
        $pass = $request->pwd_users;

        // dd(Auth::User());

        try {
            $user = User::where("login_users",$login)->first();
            if ($user == NULL || $user == "") {
                toastr()->warning("Login incorrect");
                return view("fst.home.index");
            }

            if(!Hash::check($pass, $user->pwd_users)){
                toastr()->error("Mot de passe incorrect");
                return view("fst.home.index");
            }
            if($user->etat_users != 0){
                toastr()->warning("Compte inactif");
                return view("fst.home.index");
            }

            Auth::loginUsingId($user->id);
            // dd(Auth::User());
            return view("fst.home.index");

        } catch (Exception $e) {
            toastr()->error($e->getMessage());
        }
        // dd($request->all());
        // return redirect()->route("souscription.create");
    }

    public function logout()
    {
        Auth::logout();
        toastr()->warning("Déconnexion réussie");
        return view("fst.home.index");
    }
}
