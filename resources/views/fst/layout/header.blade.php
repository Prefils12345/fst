<nav class="mb-1 fixed-top navbar navbar-expand-lg navbar-dark bg-estm">
    <div class="container-fluid">
        <a class="navbar-brand mr-5" href="index.php?page=home">
            <strong>
                <img src="{{ asset("mdb/storage/icone/kan.png") }}" class="d-block img-fluid" width="89px"
                    height="89px" alt="Logo FST">
            </strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
            aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item   ">
                    <a class="nav-link" href="{{url('/')}}">Accueil </a> 
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle "
                            id="navbarDropdownMenuLink-1" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Notre Faculté</a>
                        <div class="dropdown-menu dropdown-pink" aria-labelledby="navbarDropdownMenuLink-1">
                                        <a class="dropdown-item" href="index.php?page=fst">FST</a>
                                        <a class="dropdown-item" href="index.php?page=pourquoi_fst">Pourquoi FST</a>
                                        <a class="dropdown-item" href="index.php?page=actualites">Actualités</a>
                                        <a class="dropdown-item" href="index.php?page=contact">Nous contacter</a>
                        </div>
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Departements</a>
                            <div class="dropdown-menu dropdown-pink" aria-labelledby="navbarDropdownMenuLink-1">
                                        <a class="dropdown-item" href="index.php?page=licences">LICENCE</a>
                                        <a class="dropdown-item" href="index.php?page=masters">MASTER</a>
                                        <a class="dropdown-item" href="#">DOCTORAT</a>
                            </div>
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle "
                            id="navbarDropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Vie Étudiante</a>
                        <div class="dropdown-menu dropdown-pink"
                            aria-labelledby="navbarDropdownMenuLink-3">
                                <a class="dropdown-item" href="#">Amicale des étudiants</a>
                                <a class="dropdown-item" href="#">Clubs</a>
                                <a class="dropdown-item" href="#">Incubateur</a>
                                <a class="dropdown-item" href="#">Témoignages</a>
                        </div>
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle "
                            id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Scolarité</a>
                        <div class="dropdown-menu dropdown-pink"
                            aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item" href="#">Facultés et Universités partenaires</a>
                                <a class="dropdown-item" href="#">Programmes d&#039;échanges à l&#039;étranger</a>
                                <a class="dropdown-item" href="#">Préinscriptions</a>
                        </div>
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle "
                            id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Entreprises</a>
                        <div class="dropdown-menu dropdown-pink"
                            aria-labelledby="navbarDropdownMenuLink-5">
                                <a class="dropdown-item" href="#">Stages et emplois</a>
                                <a class="dropdown-item" href="#">Entreprises partenaires</a>
                        </div>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item active">
                    @if (Auth::User() != NULL)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle "
                                id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">{{Auth::User()->nom_users}} {{Auth::User()->prenom_users}}</a>
                            <div class="dropdown-menu dropdown-pink"
                                aria-labelledby="navbarDropdownMenuLink-5">
                                    <a class="dropdown-item" href="#">Profil</a>
                                    <a class="dropdown-item logout" href="{{route('logout')}}">Déconnexion</a>
                            </div>
                        </li>
                    @else
                        <a class="nav-link btn btn-outline-primary btn-sm" href="#"data-toggle="modal"
                            data-target="#connexion-modal">
                            Connexion
                        </a>
                    @endif
                    
                </li>
                
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary btn-sm" href="#" data-toggle="modal"
                        data-target="#brochure-modal">
                        Brochure
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br><br>
