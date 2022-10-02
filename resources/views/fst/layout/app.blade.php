<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta name="csrf-token" content="tN1n1lqjxiHhDQGuPanYya3MncqAqPpGCjqb0Jir"> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="shortcut icon" href="{{ asset("mdb/storage/icone/kan.png") }}">

    <title>@yield("title")</title>
    <meta property="og:title" content="Over 9000 Thousand!" />
    <meta property="og:description" content="For those who helped create the Genki Dama" />


    <script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"WebPage","name":"Over 9000 Thousand!","description":"For those who helped create the Genki Dama"}</script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('mdb/css/all.css')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('mdb/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('mdb/css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('mdb/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('mdb/css/toastr.min.css')}}">  
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('mdb/toastr/toastr.css')}}">  
    
    <style type="text/css">
            @media (min-width: 800px) and (max-width: 850px) {
                .navbar:not(.top-nav-collapse) {
                    background: #18428a !important;
                }
            }
    </style>
    
</head>
<!-- HEADER START -->
    @include("fst.layout.header")
    @yield("caroussel")
<!-- HEADER END --> 
<main>

    @yield("contenu")

</main>
<!-- FOOTER START -->
    @include("fst.layout.footer")
<!-- FOOTER END -->
 <!--Modal: brochure-modal-->
 <div class="modal fade" id="brochure-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
 <div class="modal-dialog modal-notify modal-danger" role="document">
     <!--Content-->
     <div class="modal-content">
         <!--Header-->
         <div class="modal-header text-center">
             <p class="heading text-center">
                 <strong>Téléchargemment de brochure de la FST</strong>
             </p>

             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true" class="white-text">&times;</span>
             </button>
         </div>
         <form class="text-center border border-light p-2 needs-validation" action="brochure"
             method="POST" novalidate>
             <input type="hidden" name="_token" value="tN1n1lqjxiHhDQGuPanYya3MncqAqPpGCjqb0Jir">
             <!--Body-->
             <div class="modal-body">

                 <!-- Default form contact -->

                 <input type="text" id="prenom1" name="prenom" value="" class="form-control mb-4"
                     placeholder="Prénom(s)" required>
                 <input type="text" id="nom1" name="nom" value=""
                     class="form-control mb-4" placeholder="Nom" required>
                 <input type="text" id="adresse1" name="email" onkeyup="validateEmail(this)" value=""
                     class="form-control" placeholder="Email" required>
                 <small class="form-text text-danger mb-4 error">
                 </small>
                 <input type="text" id="telephone1" name="telephone" onkeyup="validateTelephone(this)" value=""
                     class="form-control" placeholder="Téléphone" required>
                 <small class="form-text text-danger mb-4 error1">
                 </small>

                 <select class="browser-default custom-select form-control mb-4" id="departements" name="departement" required>
                     <option value="" selected>Veuillez choisir le Département</option>
                     <option value="LICENCE" class="option-departement" data-id="2">LICENCE</option>
                     <option value="MASTER" class="option-departement" data-id="3">MASTER</option>
                     <option value="DOCTORAT" class="option-departement" data-id="4">DOCTORAT</option>
                 </select>

                 <select class="browser-default custom-select form-control mb-4" id="filieres" name="filiere"
                     required>
                     <option value="" selected>Veuillez choisir la filière</option>

                     <option value="Mathématique" class="option-filiere" data-has_master="Oui" 
                         data-has_licence="Oui" data-departement_id="2">Mathématique
                     </option>

                     <option value="Physique" class="option-filiere" data-has_master="Oui"
                         data-has_licence="Oui" data-departement_id="2">
                         Physique
                     </option>

                     <option value="Chimie" class="option-filiere" data-has_master="Oui"
                         data-has_licence="Non" data-departement_id="2">
                         Chimie
                     </option>

                     <option value="Géologie" class="option-filiere" data-has_master="Oui"
                         data-has_licence="Non" data-departement_id="2">
                         Géologie
                     </option>

                     <option value="Biologie" class="option-filiere" data-has_master="Non"
                         data-has_licence="Oui" data-departement_id="2">
                         Biologie
                     </option>

                     <option value="Informatique" class="option-filiere" data-has_master="Oui"
                         data-has_licence="Oui" data-departement_id="2">
                         Informatique
                     </option>

                     <option value="QHSE" class="option-filiere" data-has_master="Oui"
                         data-has_licence="Oui" data-departement_id="2">
                         QHSE
                     </option>

                     <option value="Biologie" class="option-filiere" data-has_master="Oui"
                         data-has_licence="Oui" data-departement_id="3">
                         Biologie
                     </option>

                     <option value="Chimie" class="option-filiere" data-has_master="Non"
                         data-has_licence="Oui" data-departement_id="3">
                         Chimie
                     </option>

                     <option value="Géologie" class="option-filiere" data-has_master="Oui"
                         data-has_licence="Oui" data-departement_id="3">
                         Géologie
                     </option>

                     <option value="Physique" class="option-filiere" data-has_master="Oui"
                         data-has_licence="Oui" data-departement_id="3">
                         Physique
                     </option>
                                             
                     <option value="Physiologie" class="option-filiere" data-has_master="Non"
                         data-has_licence="Oui" data-departement_id="3">
                         Physiologie
                     </option>

                     <option value="MM2A" class="option-filiere" data-has_master="Oui"
                         data-has_licence="Non" data-departement_id="3">
                         MM2A
                     </option>
                                             
                     <option value="" class="option-filiere" data-has_master="Oui"
                         data-has_licence="Non" data-departement_id="3">
                         MMAP
                     </option>
                                             
                     <option value="MGET" class="option-filiere" data-has_master="Oui"
                         data-has_licence="Non" data-departement_id="3">
                         MGET
                     </option>

                     <option value="MSEN" class="option-filiere" data-has_master="Non"
                         data-has_licence="Non" data-departement_id="3">
                         MSEN
                     </option>

                     <option value="MSEN" class="option-filiere" data-has_master="Non"
                         data-has_licence="Non" data-departement_id="3">
                         MTAT
                     </option>

                     <option value="MSEN" class="option-filiere" data-has_master="Non"
                         data-has_licence="Non" data-departement_id="3">
                         MVAM
                     </option>


                     <option value="Biologie" class="option-filiere" data-has_master="Oui"
                         data-has_licence="Oui" data-has_doctorat="Oui" data-departement_id="4">
                         Biologie
                     </option>

                     <option value="Chimie" class="option-filiere" data-has_master="Non"
                         data-has_licence="Oui" data-has_doctorat="Oui" data-departement_id="4">
                         Chimie
                     </option>

                     <option value="Géologie" class="option-filiere" data-has_master="Oui"
                         data-has_licence="Oui" data-has_doctorat="Oui" data-departement_id="3">
                         Géologie
                     </option>

                     <option value="Physique" class="option-filiere" data-has_master="Oui"
                         data-has_licence="Oui" data-has_doctorat="Oui" data-departement_id="4">
                         Physique
                     </option>
                                         
                 </select>

                 <select class="browser-default custom-select form-control mb-4" id="niveaux" name="niveau" required>
                     <option value="" selected>Veuillez choisir le niveau d'étude</option>
                     <option value="Licence" class="option-licence">Licence</option>
                     <option value="Master" class="option-master">Master</option>
                     <option value="Doctorat" class="option-doctorat">Doctorat</option>
                 </select>

                 <div class="row ml-2">
                     <div class="text-muted mb-2">Comment avez-vous connu notre etablissement ?</div>
                 </div>
                 <div class="row ml-2">
                     <div class="custom-control custom-radio">
                         <input type="radio" name="comment" value="Sur les réseaux sociaux"
                             class="custom-control-input" id="social1" required>
                         <label class="custom-control-label" for="social1">Sur les réseaux sociaux</label>
                     </div>
                 </div>
                 <div class="row ml-2">
                     <!-- Default checked -->
                     <div class="custom-control custom-radio">
                         <input type="radio" name="comment" value="Par la télévision" class="custom-control-input"
                             id="tv1" required>
                         <label class="custom-control-label" for="tv1">Par la télévision</label>
                     </div>
                 </div>

                 <div class="row ml-2">
                     <div class="custom-control custom-radio">
                         <input type="radio" name="comment" value="Par la radio" class="custom-control-input"
                             id="radio1" required>
                         <label class="custom-control-label" for="radio1">Par la radio</label>
                     </div>
                 </div>

                 <div class="row ml-2">
                     <div class="custom-control custom-radio">
                         <input type="radio" name="comment" value="Par mon entourage ou amis"
                             class="custom-control-input" id="ami1" required>
                         <label class="custom-control-label" for="ami1">Par mon entourage ou amis</label>
                     </div>
                 </div>

                 <div class="row ml-2 mb-3">
                     <div class="custom-control custom-radio">
                         <input type="radio" name="comment" value="Autres" class="custom-control-input" id="autre1"
                             required>
                         <label class="custom-control-label" for="autre1">Autres</label>
                     </div>
                 </div>

                 <div class="form-group autre_1">
                     <textarea class="form-control autre_required" value="" name="autre" rounded-0" rows="2"
                         placeholder="Dites nous comment alors"></textarea>
                 </div>
                 <!-- Send button -->
                 
             </div>

             <!--Footer-->
             <div class="modal-footer flex-center">
                 <button type="submit" class="btn btn-estm-b">Télécharger<i
                         class="fas fa-download ml-1 white-text"></i></button>
                 <a type="button" class="btn btn-outline-estm waves-effect" data-dismiss="modal">Annuler</a>
             </div>
         </form>
         <!-- Default form contact -->
     </div>
     {{-- <form class="form-logout d-none" action="{{route('logout')}}" method="POST">
        <input type="submit" value="Valider">
    </form> --}}
    {{-- <a class="nav-link " href="{{URL('logout')}}">Logout</a> --}}
     <!--/.Content-->
 </div>
</div>

<!--Modal: brochure-modal-->
 <!--Modal: brochure-modal-->
<div class="modal fade" id="plaquette-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
 aria-hidden="true" data-backdrop="false">
 <div class="modal-dialog modal-notify modal-danger" role="document">
     <!--Content-->
     <div class="modal-content">
         <!--Header-->
         <div class="modal-header text-center">
             <p class="heading text-center">
                 <strong>Téléchargemment du plan academique </strong>
             </p>

             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true" class="white-text">&times;</span>
             </button>
         </div>
         <form class="text-center border border-light p-2 needs-validation" action="brochure"
             method="POST" novalidate>
             <input type="hidden" name="_token" value="tN1n1lqjxiHhDQGuPanYya3MncqAqPpGCjqb0Jir">
             <!--Body-->
             <div class="modal-body">

                 <!-- Default form contact -->

                 <input type="text" id="prenom111" name="prenom" value="" class="form-control mb-4"
                     placeholder="Prénom(s)" required>
                 <input type="text" id="nom111" name="nom" value="" class="form-control mb-4" placeholder="Nom"
                     required>
                 <input type="text" id="adresse111" name="email" onkeyup="validateEmail(this)" value=""
                     class="form-control" placeholder="Email" required>
                 <small class="form-text text-danger mb-4 error">
                 </small>
                 <input type="text" id="telephone111" name="telephone" onkeyup="validateTelephone(this)" value=""
                     class="form-control" placeholder="Téléphone" required>
                 <small class="form-text text-danger mb-4 error1">
                 </small>

                 <div class="row ml-2">
                     <div class="text-muted mb-2">Comment avez-vous connu l'école ?</div>
                 </div>
                 <div class="row ml-2">
                     <div class="custom-control custom-radio">
                         <input type="radio" name="comment" value="Sur les réseaux sociaux"
                             class="custom-control-input" id="social111" required>
                         <label class="custom-control-label" for="social111">Sur les réseaux sociaux</label>
                     </div>
                 </div>
                 <div class="row ml-2">
                     <!-- Default checked -->
                     <div class="custom-control custom-radio">
                         <input type="radio" name="comment" value="Par la télévision" class="custom-control-input"
                             id="tv111" required>
                         <label class="custom-control-label" for="tv111">Par la télévision</label>
                     </div>
                 </div>

                 <div class="row ml-2">
                     <div class="custom-control custom-radio">
                         <input type="radio" name="comment" value="Par la radio" class="custom-control-input"
                             id="radio111" required>
                         <label class="custom-control-label" for="radio111">Par la radio</label>
                     </div>
                 </div>

                 <div class="row ml-2">
                     <div class="custom-control custom-radio">
                         <input type="radio" name="comment" value="Par mon entourage ou amis"
                             class="custom-control-input" id="ami111" required>
                         <label class="custom-control-label" for="ami111">Par mon entourage ou amis</label>
                     </div>
                 </div>

                 <div class="row ml-2 mb-3">
                     <div class="custom-control custom-radio">
                         <input type="radio" name="comment" value="Autres" class="custom-control-input" id="autre111"
                             required>
                         <label class="custom-control-label" for="autre111">Autres</label>
                     </div>
                 </div>

                 <div class="form-group autre_1">
                     <textarea class="form-control autre_required" value="" name="autre" rounded-0" rows="2"
                         placeholder="Dites nous comment alors"></textarea>
                 </div>

             </div>

             <input type="hidden" name="niveau" value="Téléchargement Plaquettte Digitale">
             <input type="hidden" name="filiere" value="Téléchargement Plaquettte Digitale">
             <input type="hidden" name="departement" value="Téléchargement Plaquettte Digitale">

             <!--Footer-->
             <div class="modal-footer flex-center">
                 <button type="submit" class="btn btn-estm-b">Télécharger<i
                         class="fas fa-download ml-1 white-text"></i></button>
                 <a type="button" class="btn btn-outline-estm waves-effect" data-dismiss="modal">Annuler</a>
             </div>
         </form>
         <!-- Default form contact -->
     </div>
     <!--/.Content-->
 </div>
</div>
<!--Modal: brochure-modal-->
 <!--Modal: brochure-modal-->
<div class="modal fade" id="connexion-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
 data-backdrop="false">
 <div class="modal-dialog modal-notify modal-danger" role="document">
     <!--Content-->
     <div class="modal-content">
         <!--Header-->
         <div class="modal-header text-center">
             <p class="heading text-center">
                 <strong>Formulaire de connexion</strong>
             </p>

             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true" class="white-text">&times;</span>
             </button>
         </div>
        <form class="text-center border border-light p-2 needs-validation" action="{{route('user.login')}}" method="POST" novalidate>
             {{-- <input type="hidden" name="_token" value="tN1n1lqjxiHhDQGuPanYya3MncqAqPpGCjqb0Jir"> --}}
             <!--Body-->
             @csrf
             <div class="modal-body">

                 <!-- Default form contact -->
                 <div class="md-form md-outline input-with-post-icon">
                     <input placeholder="Pseudo" type="text" id="example" name="login_users" class="form-control" required>
                     <label for="example">Pseudo</label>
                 </div>
                 <div class="md-form md-outline input-with-post-icon">
                     <input placeholder="Mot de passe" type="password" id="example" name="pwd_users" class="form-control" required>
                     <label for="example">Mot de passe</label>
                 </div>

                 {{-- <select class="browser-default custom-select mb-4" name="profil_users" required>
                     <option value="" selected>Sél. un profil</option>                                                                                                                                                                                                                                                                                                                                                                     <option value="Service Admission-Inscription">Service Admission-Inscription</option>
                     <option value="Administrateur">Administrateur</option>
                     <option value="Doyen">Doyen</option>
                     <option value="Enseignant">Enseignant</option>
                     <option value="Chercheur">Chercheur</option>
                     <option value="Etudiant">Etudiant</option>
                 </select> --}}
                 <!-- Send button -->
                 
             </div>

             <!--Footer-->
             <div class="modal-footer flex-center">
                 <button type="submit" name="valider" class="btn btn-estm-b">Connexion</button>
                 <a type="button" class="btn btn-outline-estm waves-effect" data-dismiss="modal">Annuler</a>
             </div>
         </form>
         <!-- Default form contact -->
     </div>
     <!--/.Content-->
 </div>
</div>
<!--Modal: brochure-modal-->

 <!-- SCRIPTS -->
 <!-- JQuery -->
 <script type="text/javascript" src="{{asset('mdb/js/jquery.min.js')}}"></script>
 <!-- Bootstrap tooltips -->
 <script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>
 <!-- Bootstrap core JavaScript -->
 <script type="text/javascript" src="{{asset('mdb/js/bootstrap.min.js')}}"></script>
 <!-- MDB core JavaScript -->
 <script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('mdb/js/toastr.min.js')}}"></script>
 <script src="{{asset('mdb/toastr/toastr.js')}}"></script>
 <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','{{asset('mdb/js/analytics.js','')}}ga');
                     ga('create', 'UA-69778354-1', 'auto');
                     ga('send', 'pageview');

 </script>
 <script>
     function validateTelephone(val){
         var telephone = val.value
         var pattern =/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/;
         if ($.trim(telephone).match(pattern)) {
         $('.btn-estm-b').attr('disabled', false);
         $('.error1').html('');
         }
         else{
         $('.btn-estm-b').attr('disabled', true);
         $('.error1').html('Numéro de téléphone incorrecte');
         }
     }
     function validateEmail(val) {
             var email = val.value
             var pattern = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

             if ($.trim(email).match(pattern)) {
                 $('.btn-estm-b').attr('disabled', false);
                 $('.error').html('');
             }
             else{
                 $('.btn-estm-b').attr('disabled', true);
                 $('.error').html('Adresse Email incorrecte. Ex: nom@exemple.com');
                 }
     }

     var departements = $('#departements');
     var filieres = $('#filieres');
     var niveaux = $('#niveaux');

     $(filieres).hide();
     $(niveaux).hide();

     $('.autre_1').hide();

     $('input[name=comment]').each(function(){

     $(this).click(function(){
         if ($(this).val() == 'Autres') {
         $('.autre_1').show();
         $('.autre_required').attr('required', true);
         }
         else{
         $('.autre_1').hide();
         $('.autre_required').attr('required', false);
         }
     });
     });
     $(departements).change(function(){
         var departement_name = $(this).val();
         $('.option-departement').each(function (index, element) {
             if (departement_name == $(this).val()) {
                 var id = $(this).data('id');
                 $(filieres).show();

                 $('.option-filiere').each(function (index, element) {

                     var departement_id = $(this).data('departement_id');

                     if (id != departement_id) {
                         $(this).hide();
                     }
                     else{
                         $(this).show();
                     }
                 });

                $(filieres).change(function (e) {
                     var filiere_name = $(this).val();
                     $(niveaux).show();

                     $('.option-filiere').each(function (index, element) {
                         if (filiere_name == $(this).val()) {
                             var has_licence = $(this).data('has_licence');
                             var has_master = $(this).data('has_master');
                             var has_doctorat = $(this).data('has_doctorat');

                             if (has_licence == 'Non') {
                                 $('.option-licence').hide();
                             }
                             else{
                                 $('.option-licence').show();
                             }

                             if (has_master == 'Non'){
                                 $('.option-master').hide();
                             }
                             else{
                                 $('.option-master').show();
                             }

                             if (has_doctorat == 'Non'){
                                 $('.has_doctorat').hide();
                             }
                             else{
                                 $('.has_doctorat').show();
                             }
                         }
                     });
                });
             }
         });
     });
 </script>

 <script>
     (function() {
         'use strict';
         window.addEventListener('load', function() {
             // Fetch all the forms we want to apply custom Bootstrap validation styles to
             var forms = document.getElementsByClassName('needs-validation');
             // Loop over them and prevent submission
             var validation = Array.prototype.filter.call(forms, function(form) {
                 form.addEventListener('submit', function(event) {
                         $(".modal").css("display", "none");
                 }, false);
             });
         }, false);
     })();

     // Animations initialization
     new WOW().init();

 </script>

 {{-- <script type="text/javascript" src="{{ asset('mdb/js/jquery.min.js')}}"></script>    --}}
      
  <script type="text/javascript">toastr.options = {"closeButton":true,"closeClass":"toast-close-button","closeDuration":300,"closeEasing":"swing","closeHtml":"<button><i class=\"icon-off\"><\/i><\/button>","closeMethod":"fadeOut","closeOnHover":true,"containerId":"toast-container","debug":false,"escapeHtml":false,"extendedTimeOut":10000,"hideDuration":1000,"hideEasing":"linear","hideMethod":"fadeOut","iconClass":"toast-info","iconClasses":{"error":"toast-error","info":"toast-info","success":"toast-success","warning":"toast-warning"},"messageClass":"toast-message","newestOnTop":false,"onHidden":null,"onShown":null,"positionClass":"toast-top-full-width","preventDuplicates":true,"progressBar":true,"progressClass":"toast-progress","rtl":false,"showDuration":300,"showEasing":"swing","showMethod":"fadeIn","tapToDismiss":true,"target":"body","timeOut":5000,"titleClass":"toast-title","toastClass":"toast"};</script>
 <script src="{{asset('mdb/js/slick.js')}}"></script>
 <script src="{{asset('mdb/js/analytics.js')}}"></script>
<script>
 $(document).ready(function(){
     $('.customer-actualite').slick({
         slidesToScroll: 1,
         mobileFirst: true,
         autoplay: true,
         autoplaySpeed: 2000,
         arrows: false,
         dots: false,
         pauseOnHover: true,
         responsive: [
             {
                 breakpoint: 1200,
                 settings: {slidesToShow: 3}
             },
             {
                 breakpoint: 768,
                 settings: {slidesToShow: 3}
             },
             {
                 breakpoint: 520,
                 settings: {slidesToShow: 1}
             }
         ]
     });
 });
</script>
<script>
 (function ($) {
 $.fn.countTo = function (options) {
 options = options || {};

 return $(this).each(function () {
 // set options for current element
     var settings = $.extend({}, $.fn.countTo.defaults, {
     from: $(this).data('from'),
     to: $(this).data('to'),
     speed: $(this).data('speed'),
     refreshInterval: $(this).data('refresh-interval'),
     decimals: $(this).data('decimals'),
     index: $(this).data('index'),
     }, options);

     // how many times to update the value, and how much to increment the value on each update
     var loops = Math.ceil(settings.speed / settings.refreshInterval),
     increment = (settings.to - settings.from) / loops;

     // references & variables that will change with each update
     var self = this,
     $self = $(this),
     loopCount = 0,
     value = settings.from,
     data = $self.data('countTo') || {};

     $self.data('countTo', data);

     // if an existing interval can be found, clear it first
     if (data.interval) {
     clearInterval(data.interval);
     }
     data.interval = setInterval(updateTimer, settings.refreshInterval);

     // initialize the element with the starting value
     render(value);

     function updateTimer() {
     value += increment;
     loopCount++;

     render(value);

     if (typeof(settings.onUpdate) == 'function') {
     settings.onUpdate.call(self, value);
     }

     if (loopCount >= loops) {
     // remove the interval
     $self.removeData('countTo');
     clearInterval(data.interval);
     value = settings.to;

     if (typeof(settings.onComplete) == 'function') {
     settings.onComplete.call(self, value);
     }
     }
 }

 function render(value) {
     var formattedValue = settings.formatter.call(self, value, settings);
     $self.html(formattedValue);
 }
 });
 };

     $.fn.countTo.defaults = {
     from: 0, // the number the element should start at
     to: 0, // the number the element should end at
     speed: 1000, // how long it should take to count between the target numbers
     refreshInterval: 100, // how often the element should be updated
     decimals: 0, // the number of decimal places to show,
     formatter: formatter, // handler for formatting the value before rendering
     onUpdate: null, // callback method for every time the element is updated
     onComplete: null // callback method for when the element finishes updating
     };

 function formatter(value, settings) {
     return value.toFixed(settings.decimals);
 }
 }(jQuery));

 jQuery(function ($) {
 // custom formatting example
 $('.count-number').data('countToOptions', {
 formatter: function (value, options) {
 if (options.index == 1) {
     return '+ ' + value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ' ');
 }

 if (options.index == 2) {
 return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ' ') + ' %';
 }

 if (options.index == 3) {
 return '+ ' +value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ' ');
 }
 }
 });

 // start all the timers
 $('.timer').each(count);

 function count(options) {
 var $this = $(this);
 options = $.extend({}, options || {}, $this.data('countToOptions') || {});
 $this.countTo(options);
 }
 });
</script>
<script>
 (function() {
 'use strict';
 window.addEventListener('load', function() {
 // Fetch all the forms we want to apply custom Bootstrap validation styles to
 var forms = document.getElementsByClassName('needs-validation');
 // Loop over them and prevent submission
 var validation = Array.prototype.filter.call(forms, function(form) {
 form.addEventListener('submit', function(event) {
 if (form.checkValidity() === false) {
 event.preventDefault();
 event.stopPropagation();
 }
 form.classList.add('was-validated');
 }, false);
 });
 }, false);
 })();
</script>

<script src="{{ asset('mdb/js/owl.carousel.js')}}"></script>
<script>
 $(document).ready(function(){
    // $('a.logout').on('click',function(){
    //         $('form.form-logout').submit();
    //     return false;
    // });

     if($('.brands_slider').length)
     {
     var brandsSlider = $('.brands_slider');

     brandsSlider.owlCarousel(
     {
     loop:true,
     autoplay:true,
     autoplayTimeout:3000,
     nav:false,
     dots:false,
     autoWidth:true,
     items: `17`,
     margin:5
     });

     if($('.brands_prev').length)
     {
     var prev = $('.brands_prev');
     prev.on('click', function()
     {
     brandsSlider.trigger('prev.owl.carousel');
     });
     }

     if($('.brands_next').length)
     {
         var next = $('.brands_next');
         next.on('click', function()
         {
         brandsSlider.trigger('next.owl.carousel');
         });
     }
 }


 });
</script>



 <div class="js-cookie-consent cookie-consent text-center fixed-bottom bg-white">

     <span class="cookie-consent__message">
         
         L'autorisation des cookies améliorera votre expérience sur ce site.
     </span>

     <button class="js-cookie-consent-agree cookie-consent__agree btn btn-estm-success">
         
         Accepter les cookies
     </button>

 </div>

<script>

     window.laravelCookieConsent = (function () {

         const COOKIE_VALUE = 1;
         const COOKIE_DOMAIN = 'www.fst.cg';

         function consentWithCookies() {
             setCookie('estm_cookie_consent', COOKIE_VALUE, 7300);
             hideCookieDialog();
         }

         function cookieExists(name) {
             return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1);
         }

         function hideCookieDialog() {
             const dialogs = document.getElementsByClassName('js-cookie-consent');

             for (let i = 0; i < dialogs.length; ++i) {
                 dialogs[i].style.display = 'none';
             }
         }

         function setCookie(name, value, expirationInDays) {
             const date = new Date();
             date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
             document.cookie = name + '=' + value
                 + ';expires=' + date.toUTCString()
                 + ';domain=' + COOKIE_DOMAIN
                 + ';path=/'
                 + ';samesite=lax';
         }

         if (cookieExists('estm_cookie_consent')) {
             hideCookieDialog();
         }

         const buttons = document.getElementsByClassName('js-cookie-consent-agree');

         for (let i = 0; i < buttons.length; ++i) {
             buttons[i].addEventListener('click', consentWithCookies);
         }

         return {
             consentWithCookies: consentWithCookies,
             hideCookieDialog: hideCookieDialog
         };
     })();
</script>

</body>

</html>




