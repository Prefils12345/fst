@extends("fst.layout.app")
@section("title")
    Préinscription
@endsection
@section("contenu")
        <!-- ##### Partie presentations ##### -->
        <div class="container py-5 z-depth-1 bg-white">
            <section class="px-md-5 mx-md-5 text-center dark-grey-text">
                <h2>Processus de Préinscription</h2>
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step col-xs-3">
                            <button href="#step-1" type="button" class="btn btn-estm btn-circle">
                                <i class="fas fa-user"></i></button>
                            <p><small>Personne</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <button href="#step-2" type="button" class="btn btn-estm btn-circle" disabled>
                                <i class="fas fa-graduation-cap"></i></button>
                            <p><small>Formation</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <button href="#step-3" type="button" class="btn btn-estm btn-circle" disabled>
                                <i class="fas fa-file-pdf"></i></button>
                            <p><small>Documents</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <button href="#step-4" type="button" class="btn btn-estm btn-circle" disabled>
                                <i class="fas fa-check"></i></button>
                            <p><small>Terminé</small></p>
                        </div>
                    </div>
                </div>                

                <form role="form" method="POST" action="{{route('etudiant.store')}}">
                    @csrf
                    {{-- @method('PUT') --}}
                    {{-- <input type="hidden" name="_token" value="tN1n1lqjxiHhDQGuPanYya3MncqAqPpGCjqb0Jir">                     --}}
                    <div class="panel panel-primary setup-content" id="step-1">
                        <div class="panel-heading">
                            <h3 class="panel-title">Informations Personnelles</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group md-form md-outline mb-0">
                                        <input type="text" name="prenom_etudiant" class="form-control"
                                            placeholder="Prénom(s)">
                                        <label for="form-first-name">Prénom(s)</label>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group md-form md-outline mb-0">
                                        <input type="text" name="nom_etudiant" class="form-control" placeholder="Nom"
                                        >
                                        <label for="form-first-name">Nom</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group md-form md-outline mb-0">
                                        <input type="text" name="adresperso_etudiant" class="form-control"
                                            placeholder="Adresse">
                                        <label for="form-first-name">Adresse</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group md-form md-outline mb-0">
                                        <select class="browser-default custom-select" name="id_pays">
                                            @foreach ($pays as $pay)
                                                @if ($pay->libelle_pays == "Congo")
                                                    <option value="{{$pay->id}}" selected>{{$pay->libelle_pays}}</option>
                                                @else
                                                    <option value="{{$pay->id}}">{{$pay->libelle_pays}}</option> 
                                                @endif
                                            @endforeach
                                        </select>
                                        <small class="form-text text-danger error3">
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group md-form md-outline mb-0">
                                        <input type="text" name="mail_etudiant"
                                            class="form-control" placeholder="Email">
                                        <label for="form-first-name">Email</label>
                                        <small class="form-text text-danger mb-4 error">
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group md-form md-outline mb-0">
                                        <input type="text" name="tel_etudiant"
                                            class="form-control" placeholder="Téléphone">
                                        <label for="form-first-name">Téléphone</label>
                                        <small class="form-text text-danger mb-4 error1">
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-2">
                        <div class="panel-heading">
                            <h3 class="panel-title">Choix de Formation</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group md-form md-outline">
                                        <select class="browser-default custom-select form-control" name="id_niveau" id="niveau_actuel"
                                            name="niveau_actuel">
                                            <option selected>Sél. Niveau actuel</option>
                                            @foreach ($niveaus as $niveau)
                                                <option value="{{$niveau->id}}">{{$niveau->libelle_niveau}}</option>
                                            @endforeach
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                                        </select> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group md-form md-outline">
                                        <select class="browser-default custom-select form-control" id="bac" name="bac">
                                            <option selected>Sél. Baccalauréat</option>
                                            <option value="Bac scientifique">Bac scientifique</option>
                                            <option value="Bac économie (G, ES,...)">Bac économie (G, ES,...)</option>
                                            <option value="Bac technique">Bac technique</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group md-form md-outline">
                                        <select class="browser-default custom-select form-control" id="formation"
                                            name="id_formation">
                                            <option selected>Sél. Formation</option>
                                            @foreach ($formations as $formation)
                                                <option value="{{$formation->id}}">{{$formation->labelformation}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group md-form md-outline">
                                        <select class="browser-default custom-select form-control"
                                            name="id_diplome">
                                            <option selected>Sél. Niveau souhaité</option>

                                            @foreach ($diplomes as $diplome)
                                                <option value="{{$diplome->id}}">{{$diplome->libelle_diplome}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-3">
                        <div class="panel-heading">
                            <h3 class="panel-title">Documents à fournir</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Votre demande d'inscription</span>
                                    <div class="form-group custom-file mb-4">
                                        <input type="file" class="custom-file-input form-control" name="demande_inscription"
                                            accept=".pdf" lang="fr">
                                        <label class="custom-file-label" for="customFileLang">Cliquer pour
                                            ajouter</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <span>Votre relevé de note du BAC</span>
                                    <div class="form-group custom-file mb-4">
                                        <input type="file" class="custom-file-input form-control" name="releve_bac"
                                            accept=".pdf" lang="fr">
                                        <label class="custom-file-label" for="customFileLang">Cliquer pour
                                            ajouter</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Une copie légalisée de votre dernier diplôme</span>
                                    <div class="form-group custom-file mb-4">
                                        <input type="file" class="custom-file-input form-control" name="dernier_diplome"
                                            accept=".pdf" lang="fr">
                                        <label class="custom-file-label" for="customFileLang">Cliquer pour
                                            ajouter</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <span>Une pièce d'état civil (Extrait de naissance)</span>
                                    <div class="form-group custom-file mb-4">
                                        <input type="file" class="custom-file-input form-control" name="piece_etat_civil"
                                            accept=".pdf" lang="fr">
                                        <label class="custom-file-label" for="customFileLang">Cliquer pour
                                            ajouter</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span>La copie de votre CNI ou Passeport</span>
                                    <div class="form-group custom-file mb-4">
                                        <input type="file" class="custom-file-input form-control" name="cni_passport"
                                            accept=".pdf" lang="fr">
                                        <label class="custom-file-label" for="customFileLang">Cliquer pour
                                            ajouter</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group custom-file mb-4">
                                        <span class="text-muted mr-2">Les relevés de notes de la dernière
                                            classe</span><br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="releve_note" value="deux" id="deux"
                                                class="custom-control-input">
                                            <label class="custom-control-label form-control" for="deux">J'en ai
                                                2</label>
                                        </div>

                                        <!-- Default inline 2-->
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="releve_note" value="trois" id="trois"
                                                class="custom-control-input form-control">
                                            <label class="custom-control-label" for="trois">J'en ai 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="deux-b">
                                <div class="col-md-6">
                                    <div class="form-group custom-file mb-4">
                                        <input type="file" class="custom-file-input deux-b" name="releve_1" accept=".pdf" lang="fr">
                                        <label class="custom-file-label" for="customFileLang">Cliquer pour ajouter le
                                            1er</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group custom-file mb-4">
                                        <input type="file" class="custom-file-input deux-b" name="releve_2" accept=".pdf" lang="fr">
                                        <label class="custom-file-label" for="customFileLang">Cliquer pour ajouter le
                                            2e</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="trois-b">
                                <div class="col-md-6">
                                    <div class="form-group custom-file mb-4">
                                        <input type="file" class="custom-file-input trois-b" name="releve_3" accept=".pdf" lang="fr">
                                        <label class="custom-file-label" for="customFileLang">Cliquer pour ajouter le
                                            1er</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group custom-file mb-4">
                                        <input type="file" class="custom-file-input trois-b" name="releve_22" accept=".pdf" lang="fr">
                                        <label class="custom-file-label" for="customFileLang">Cliquer pour ajouter le
                                            2e</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group custom-file mb-4">
                                        <input type="file" class="custom-file-input trois-b" name="releve_32" accept=".pdf" lang="fr">
                                        <label class="custom-file-label" for="customFileLang">Cliquer pour ajouter le
                                            3e</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success nextBtn btn-sm pull-right" name="valider" type="submit">Envoyer</button>
                </form>
            </section>
        </div>
        </section> 
@endsection