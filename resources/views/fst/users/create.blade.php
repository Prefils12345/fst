@extends("fst.layout.app")
@section("title")
    Création du compte
@endsection
@section("contenu")
    <div id="grad1" class="py-5 px-3">
        <div>
            <div class="container py-5 z-depth-1 bg-white">
                <section class="px-md-5 mx-md-5 text-center dark-grey-text">
                    <h2>Processus de Création du compte</h2>
                    <form role="form" method="POST" action="{{route('user.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="panel panel-primary setup-content"  id="step-1">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group md-form md-outline mb-0">
                                            <input type="text" value="" name="prenom_users" class="form-control"
                                                placeholder="Prénom(s)" required>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group md-form md-outline mb-0">
                                            <input type="text" value="" name="nom_users" class="form-control" placeholder="Nom(s)"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group md-form md-outline mb-0">
                                            <input type="text" onkeyup="validateEmail(this)" value="" name="email_users"
                                                class="form-control" placeholder="Email" required>
                                            <small class="form-text text-danger mb-4 error">
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group md-form md-outline mb-0">
                                            <input type="text" onkeyup="validateTelephone(this)" value="" name="tel_users"
                                                class="form-control" placeholder="Téléphone" required>
                                            <small class="form-text text-danger mb-4 error1">
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group md-form md-outline mb-0">
                                            <input type="text" value="" name="login_users" class="form-control"
                                                placeholder="Pseudo" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group md-form md-outline mb-0">
                                            <input type="password" value="" name="pwd_users" class="form-control"
                                                placeholder="Mot de passe" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group md-form md-outline mb-0">
                                            <select id="profil-v" class="browser-default custom-select" name="profil_users" required>
                                                <option value="" selected>Sél. Profil</option>
                                                <option value="Administrateur">Administrateur</option>
                                                <option value="Doyen">Doyen</option>
                                                <option value="Enseignant">Enseignant</option>
                                                <option value="Etudiant">Etudiant</option>
                                            </select>
                                            <small class="form-text text-danger error3"></small>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-estm-success nextBtn pull-right btn-s1 btn-sm" name="valider"  type="submit">Enregistrer</button>
                                
                            </div>
                        </div>

                    </form>
                    <div class="col-md-10 mt-3">
                        <div class="media-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="m-0">
                                        <span>
                                            <strong class="text-black mr-4"
                                                style="color: black; font-weight: 600">
                                                <a href="#"data-toggle="modal" data-target="#connexion-modal" class="text-estm"
                                                    style="font-size: 18px; font-weight: 800;">J'ai déja un compte
                                                </a>
                                            </strong>
                                        </span>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    
                                </div>
                            </div>
                        </div>
                </div>
                </section>
            </div>
        </div>
    </div>
@endsection