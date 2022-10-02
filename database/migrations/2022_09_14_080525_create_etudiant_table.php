<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_etudiant', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nie_etudiant',70)->unique();
            $table->string('nom_etudiant',70);
            $table->string('prenom_etudiant',70)->nullable();
            $table->string('adresperso_etudiant',30);
            $table->string('mail_etudiant',30);
            $table->string('tel_etudiant',30);
            $table->unsignedInteger('id_pays');
            $table->unsignedInteger('id_niveau');//Niveau actuel ou d'éntrée
            $table->unsignedInteger('id_diplome');//Niveau future
            $table->string('demande_inscription',250)->nullable();
            $table->string('releve_bac',250);//Dossier
            $table->string('dernier_diplome',250);//Dossier
            $table->string('piece_etat_civil',250);//Dossier
            $table->string('cni_passport',250);//Dossier
            $table->string('releve_1',250);//Dossier
            $table->string('releve_2',250);//Dossier
            $table->string('releve_3',250);//Dossier
            $table->string('statut',10);
            $table->timestamp('date_creation')->default(now());
            $table->boolean("suppression_logique")->default(false);
            $table->boolean("foad")->default(false);
            $table->timestamps();

            
            $table->foreign('id_pays')->references('id')->on('tr_pays')->onDelete('cascade');
            $table->foreign('id_niveau')->references('id')->on('tr_niveau')->onDelete('cascade');
            $table->foreign('id_diplome')->references('id')->on('tr_diplome')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_etudiant');
    }
}
