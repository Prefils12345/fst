@extends("fst.layout.app")
@section("title")
    Accueil
@endsection
@section("caroussel")
<div>
    <div id="carousselHome" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousselHome" data-slide-to="0" class="active"></li>
            <li data-target="#carousselHome" data-slide-to="1"></li>
            <li data-target="#carousselHome" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner text-center">
                <div class="carousel-item active ">
                        <img src="{{ asset("mdb/storage/home/slide/slide2.jpg") }}"
                        class="d-sm-block d-md-block d-xl-block w-100 h-100 img-carousel" alt="...">
                    <div class="carousel-caption d-none d-md-block d-sm-block d-xs-block"
                        style="background-color: rgba(1, 1, 1, 0.5)">
                        <h1>Bonne et heureuse année 2022</h1>
                        <p>Nous vous souhaitons de passer de bonnes fêtes de fin d’année en compagnie de vos familles et de vos proches.
                            #Welcome_2022 #2022newyear 🎉 🎊</p>
                    </div>
                </div>
                <div class="carousel-item  ">
                        <img src="{{ asset("mdb/storage/home/slide/slide1.jpg") }}"
                        class="d-sm-block d-md-block d-xl-block w-100 h-100 img-carousel" alt="...">
                    <div class="carousel-caption d-none d-md-block d-sm-block d-xs-block"
                        style="background-color: rgba(1, 1, 1, 0.5)">
                        <h1>BIENVENU DANS LE MONDE DES SCIENCES!!!!</h1>
                        <p>Vous êtes le pont vers le succès, Vous êtes unique et irremplaçable, 
                       Vous êtes un innovateur disruptif, Vous avez le pouvoir de définir votre avenir,
                       Vous faites le pont entre votre passé et votre avenir.</p>
                    </div>
                </div>
                <div class="carousel-item  ">
                        <img src="{{ asset("mdb/storage/home/slide/slide3.jpg") }}"
                        class="d-sm-block d-md-block d-xl-block w-100 h-100 img-carousel" alt="...">
                    <div class="carousel-caption d-none d-md-block d-sm-block d-xs-block"
                        style="background-color: rgba(1, 1, 1, 0.5)">
                        <h1>NOUVEAU</h1>
                        <p>.</p>
                    </div>
                </div>
        </div>
        <a class="carousel-control-prev" href="#carousselHome" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédente</span>
        </a>
        <a class="carousel-control-next" href="#carousselHome" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivante</span>
        </a>
    </div>
</div> 
@endsection
@section("contenu")
        <!-- ##### Partie presentations ##### -->
        <div class="container">
            <!--Section: Main info-->
            <section class="mt-5 wow fadeIn">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                            <img src="{{ asset("mdb/storage/home/slide/mot.jpg") }}"
                            class="img-fluid z-depth-1-half" alt="Professionnels, étudiants intégrez nos masters et licences professionnelles">
                        
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!-- Main heading -->
                        <h3 class="h3 mb-3">Professionnels, étudiants intégrez nos masters et licences professionnelles</h3>
                        <p>
                            <p>Nos Licences en Sciences et Technologies:<br /></p>
                            <ul>
                                <li>
                                    Biologie<br />
                                </li>
                                <li>
                                    Chimie<br />
                                </li>
                                <li>
                                    Geologie<br />
                                </li>
                                <li>
                                    Informatique<br />
                                </li>
                                <li>
                                    Mathematique<br />
                                </li>
                                <li>
                                    Physique<br />
                                </li>
                                <li>
                                    QHSE<br />
                                </li>
                            </ul>
                            <br />
                                Nos masters en Sciences et Technologies:<br />
                                - Biologie Cellulaire et Moléculaire (MBCM)<br />
                                - Chimie (MCHM)<br />
                                - Ecologie<br />
                                - Gestion des Ecosystèmes Tropicaux (MGET)<br />
                                - Mathématiques Appliquées (MM2A)<br />
                                - Mathématiques Pures (MMAP) <br />
                                - Physiologie et Production  Végétales (MBPV)<br />
                                - Physique (MPHY)<br />
                                - Sciences de la Terre (MSTE)  <br />
                                - Sciences de l’Environnement (MSEN)<br />
                                - Technologie des Aliments Tropicaux (MTAT)<br />
                                - Transformation Alimentaire des Agroressources (MTAT)  <br />
                                - Valorisation des Plantes Aromatiques, Alimentaires et Médicinales (MVAM)<br />
                            </p>
                            <hr>

                        <!-- CTA -->
                        <a class="btn btn-estm btn-sm" style="font-size: 10px;"  href="{{ route('user.create')}}" class="btn btn-estm btn-md"> Créer votre compte
                        </a>
                        <!-- CTA -->
                        @if (Auth::User() != NULL && Auth::User()->profil_users == "Etudiant")
                            <a class="btn btn-estm btn-sm" href="{{route('etudiant.create')}}">
                                Préinscription
                            </a>
                        @else
                            
                        @endif
                        

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Main info-->
        </div>



        <!-- ##### Partie en chiffres ##### -->
        <div class="py-5 px-md-5 my-5 text-center white-text grey p-5 z-depth-1"
            style="background-position: center; background-repeat: no-repeat; background-size: cover;  background-image: url();">
            <div class="container my-5 z-depth-1 px-0 rounded">
                <section class="white-text white rounded">
                    <h3 class="text-center font-weight-bold mb-4 pb-2">FST en chiffres</h3>
                    <div class="row text-center">
                        <div class="col-md-4 p-3">
                            <div class="counter">
                                <i class="fa fa-graduation-cap fa-3x"></i>
                                <h3 style="font-weight: 900" data-index="1" class="timer count-title count-number"
                                    data-to="4500" data-speed="1500">
                                </h3>
                                <p style="font-weight: 700" class="count-text"> Diplômés </p>
                            </div>
                        </div>
                        <div class="col-md-4 p-3">
                            <div class="counter">
                                <i class="fa fa-briefcase fa-3x"></i>
                                <h3 style="font-weight: 900" data-index="2" class="timer count-title count-number"
                                    data-to="90" data-speed="1500">
                                </h3>
                                <p style="font-weight: 700" class="count-text"> d'Insertion Professionnelle </p>
                            </div>
                        </div>
                        <div class="col-md-4 p-3">
                            <div class="counter">
                                <i class="fa fa-globe fa-3x"></i>
                                <h3 style="font-weight: 900" data-index="3" class="timer count-title count-number"
                                    data-to="1500" data-speed="1500">
                                </h3>
                                <p style="font-weight: 700" class="count-text"> Étudiants Internationaux </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>



        <!-- ##### Partie actualités ##### -->
        <div class="container mt-1">
        <section class="">

        <!-- Section heading -->
        <h3 class="text-center font-weight-bold mb-5">Actualités</h3>

        <div class="row">
            <div class="container">
                <section class="customer-actualite slider">
                                        <!--Grid column-->
                    <div class="slide">
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div>
                                <img src="{{ asset("mdb/storage/actualites/hCilAxFzGIIh2awWItkCvQudi77X6cKUzQmXRWHb.png") }}" class="img-fluid z-depth-1-half" alt="Signature de convention de partenariat avec AZERTY1 pour l&#039;insertion professionnelle de nos étudiants.">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title" style="font-size: 16px">
                                    <strong>Signature de l’accord entre l’UMNG, le CAMES et le CESAG.</strong></h4>
                                <hr>
                                <!--Text-->

                                <p class="card-text mb-3">
                                Arrivée à Brazzaville le lundi soir, le Secrétaire Général du CAMES, le Professeur Abou NAPON, accompagné du Directeur général du CESAG, le Professeur Balibié Serge Auguste BAYALA, a eu une journée. </p>
                                <div class="d-flex justify-content-between">
                                    <p class="font-small font-weight-bold dark-grey-text mb-1">
                                        18-05-2022
                                    </p>
                                    <p class="text-right mb-0 font-small font-weight-bold">
                                        <a href="notre-ecole/actualites/Signature%20de%20convention%20de%20partenariat%20avec%20AZERTY1%20pour%20l%27insertion%20professionnelle%20de%20nos%20%c3%a9tudiants.html">Voir
                                            plus
                                            <i class="fas fa-angle-right"></i>
                                        </a></p>
                                </div>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->
                    <div class="slide">
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div>
                                    <img src="{{ asset("mdb/storage/actualites/lBVPjoJdEaGRLKbCEpP7ktlOIyb9xwplX1BYJsJF.png") }}"
                                    class="img-fluid z-depth-1-half" alt="Portrait du jour">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title" style="font-size: 16px">
                                    <strong>Congratulation des promus de l’UMNG à la 43ème session des CCI et des lauréats du 20ème concours d’agrégation du CAMES</strong></h4>
                                <hr>
                                <!--Text-->

                                <p class="card-text mb-3">
                                La cérémonie de congratulation des promus de la 43ème session des Comités Consultatifs Interafricains (CCI) et des lauréats du 20ème Concours d’agrégation des Sciences Juridique. </p>
                                <div class="d-flex justify-content-between">
                                    <p class="font-small font-weight-bold dark-grey-text mb-1">
                                        05-05-2022
                                    </p>
                                    <p class="text-right mb-0 font-small font-weight-bold">
                                        <a href="notre-ecole/actualites/Portrait%20du%20jour.html">
                                            Voir plus
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->
                    <div class="slide">
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div>
                                <img src="{{ asset("mdb/storage/actualites/AccoAArInc4jTjM04l2OkjaXQ7aL8iIPlYak6quw.png") }}"
                                    class="img-fluid z-depth-1-half" alt="Le Club CMAD en visite d’entreprise à TELOPHASE">
                                                                                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title" style="font-size: 16px">
                                    <strong>Le Club CMAD en visite d’entreprise à TELOPHASE</strong></h4>
                                <hr>
                                <!--Text-->

                                <p class="card-text mb-3">
                                    Le 25 Avril 2022, les membres du Club CMAD ont effectué une visite d’entreprise au sein de l’entr... </p>
                                <div class="d-flex justify-content-between">
                                    <p class="font-small font-weight-bold dark-grey-text mb-1">
                                        27-04-2022
                                    </p>
                                    <p class="text-right mb-0 font-small font-weight-bold">
                                        <a href="notre-ecole/actualites/Le%20Club%20CMAD%20en%20visite%20d%e2%80%99entreprise%20%c3%a0%20TELOPHASE.html">Voir
                                            plus
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="slide">
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div>
                                <img src="{{ asset("mdb/storage/actualites/uthU5JSvr9fKOqb800DhOEvWyyktkmCqV0Y8jAo0.png") }}"
                                    class="img-fluid z-depth-1-half" alt="Une équipe de l’ESTM en visite à l’ambassade du Sénégal au Gabon">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title" style="font-size: 16px">
                                    <strong>Une équipe FST en visite à l’ambassade du Sénégal au Gabon</strong></h4>
                                <hr>
                                <!--Text-->

                                <p class="card-text mb-3">
                                    M. Felix CAMPAL Directeur des Etudes de l’ESTM, Mme Anna SAR Responsable Communication et Dévelop... </p>
                                <div class="d-flex justify-content-between">
                                    <p class="font-small font-weight-bold dark-grey-text mb-1">
                                        22-04-2022
                                    </p>
                                    <p class="text-right mb-0 font-small font-weight-bold">
                                        <a href="notre-ecole/actualites/Une%20%c3%a9quipe%20de%20l%e2%80%99ESTM%20en%20visite%20%c3%a0%20l%e2%80%99ambassade%20du%20S%c3%a9n%c3%a9gal%20au%20Gabon.html">
                                            Voir plus
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="slide">
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div>
                                    <img src="{{ asset("mdb/storage/actualites/adePYXShDgNF8B4KbRAQTsnHdycQTHyUOkzUye9m.png") }}"
                                    class="img-fluid z-depth-1-half" alt="Un alumni de l&#039;ESTM, grand gagnant de la 2ème édition du Hackathon externe Oss portant sur l&#039;E-commerce de ORANGE SN">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title" style="font-size: 16px">
                                    <strong>Un alumni de l&#039;FST, grand gagnant de la 2ème édition du Hackathon externe Oss portant sur l&#039;E-commerce de ORANGE SN</strong></h4>
                                <hr>
                                <!--Text-->

                                <p class="card-text mb-3">
                                    ‘Ce que l’on conçoit bien s’énonce clairement, et les mots pour le dire arrivent aisément’. C’est... </p>
                                <div class="d-flex justify-content-between">
                                    <p class="font-small font-weight-bold dark-grey-text mb-1">
                                        24-03-2022
                                    </p>
                                    <p class="text-right mb-0 font-small font-weight-bold">
                                        <a href="notre-ecole/actualites/Un%20alumni%20de%20l%27ESTM%2c%20grand%20gagnant%20de%20la%202%c3%a8me%20%c3%a9dition%20du%20Hackathon%20externe%20Oss%20portant%20sur%20l%27E-commerce%20de%20ORANGE%20SN.html">Voir
                                            plus
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="slide">
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div>
                                <img src="{{ asset("mdb/storage/actualites/gMeW4lMqtPFUBpdYVKLZl7252WHqohPZZjVawcwt.png") }}"
                                    class="img-fluid z-depth-1-half" alt="Les après-midis de la tech: émission spéciale ESTM par Ousmane GUEYE">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title" style="font-size: 16px">
                                    <strong>Les après-midis de la tech: émission spéciale ESTM par Ousmane GUEYE</strong></h4>
                                <hr>
                                <!--Text-->

                                <p class="card-text mb-3">
                                Signature d'un protocole d'accord entre l'UMNG et l'ARPCE</p>
                                <div class="d-flex justify-content-between">
                                    <p class="font-small font-weight-bold dark-grey-text mb-1">
                                        01-02-2022
                                    </p>
                                    <p class="text-right mb-0 font-small font-weight-bold">
                                        <a href="notre-ecole/actualites/Les%20apr%c3%a8s-midis%20de%20la%20tech_%20%c3%a9mission%20sp%c3%a9ciale%20ESTM%20par%20Ousmane%20GUEYE.html">
                                            Voir plus
                                                <i class="fas fa-angle-right"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="slide">
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div>
                                    <img src="{{ asset("mdb/storage/actualites/4DkR0HWY4dV9r8wFCnlb277yCYL1gdtAZCHx8DnG.svg") }}"
                                    class="img-fluid z-depth-1-half" alt="Nos étudiants de la Licence 3 GEER visitent une centrale électrique">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title" style="font-size: 16px">
                                    <strong>Nos étudiants de la Licence 3 visitent une centrale</strong></h4>
                                <hr>
                                <!--Text-->

                                <p class="card-text mb-3">
                                    L&#039;immersion en entreprise, à travers les visites pédagogiques, est un aspect important dans la fo... </p>
                                <div class="d-flex justify-content-between">
                                    <p class="font-small font-weight-bold dark-grey-text mb-1">
                                        27-11-2021
                                    </p>
                                    <p class="text-right mb-0 font-small font-weight-bold">
                                        <a href="notre-ecole/actualites/Nos%20%c3%a9tudiants%20de%20la%20Licence%203%20GEER%20visitent%20une%20centrale%20%c3%a9lectrique.html">
                                            Voir plus
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->
                                    
                    <!--Grid column-->
                    <div class="slide">
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div>
                                    <img src="{{ asset("mdb/storage/actualites/mIrFWAJwJoaM2FhjnhSC4guc727PvfDe6fXdC8eS.png") }}"
                                    class="img-fluid z-depth-1-half" alt="Forum Afrique Coeur du monde 2021: nos étudiants y était!">
                                                                                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title" style="font-size: 16px">
                                    <strong>Forum Afrique Coeur du monde 2021: nos étudiants y était!</strong></h4>
                                <hr>
                                <!--Text-->

                                <p class="card-text mb-3">
                                    Le samedi 26 juin 2021, nos étudiants du club CEMAD (club des leaders de demain) ont assisté au F... </p>
                                <div class="d-flex justify-content-between">
                                    <p class="font-small font-weight-bold dark-grey-text mb-1">
                                        28-06-2021
                                    </p>
                                    <p class="font-small grey-text mb-0"><i class="fas fa-map-marker-alt"></i>
                                        FST / BRAZZAVILLE
                                    </p>
                                    <p class="text-right mb-0 font-small font-weight-bold">
                                        <a href="notre-ecole/actualites/Forum%20Afrique%20Coeur%20du%20monde%202021_%20nos%20%c3%a9tudiants%20y%20%c3%a9tait%21.html">Voir
                                            plus
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->
                                        
                    
                </section>

                <div class="text-center mb-5">
                    <a class="black-text font-weight-bold" href="#">
                        Voir toutes les actualités
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>

        </div>

        </section>
        </div>

        <!-- ##### Partie presentation des etudiants ##### -->
        <section class="south-editor-area d-flex align-items-center">
        <!-- Editor Content -->
        <div class="col-md-8 p-3">
        <div class="editor-content-area">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <h2>Mot du Doyen</h2>
                <p>Pr BOSSOTO</p>
            </div>

            <p class="wow fadeInUp" data-wow-delay="500ms">
            Chers Étudiants et Parent d’étudiant,<br>
            Au nom de la communauté universitaire de l’UMNG, 
            je suis très heureux de vous annoncer le lancement de notre site web, 
            un site institutionnel constitue la vitrine de notre Faculté. 
            Son portail dénommé www.fst.cg vous permet de découvrir ce que nous sommes 
            et ce que nous offrons en matière de formation et de recherche.
            </p>
            <div class="address wow fadeInUp" data-wow-delay="750ms">
                <h6><img src="{{ asset("mdb/storage/home/slide/phone-call.png") }}" alt=""> +242 040438988</h6>
                <h6><img src="{{ asset("mdb/storage/home/slide/envelope.png") }}" alt=""> fst@fst.com</h6>
            </div>
            <div class="signature mt-50 wow fadeInUp" data-wow-delay="1000ms">
                <img src="{{ asset("mdb/storage/home/slide/signature.png") }}" alt="">
            </div>
        </div>            
        </div>

        <!-- Editor Thumbnail -->
        <div class="col-md-4 p-3">
        <div class="editor-thumbnail">
            <img src="{{ asset("mdb/storage/home/slide/prof.jpg") }}" alt="">
        </div>
        </div>
        </section> 
@endsection