<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSouscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_souscriptions', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("observation",250);
            $table->unsignedInteger('id_etudiant');
            $table->unsignedInteger('id_formation');
            $table->unsignedInteger('id_annee');
            $table->integer("statut")->default(0);
            $table->boolean("suppression_logique")->default(false);
            $table->timestamps();

            $table->foreign('id_formation')->references('id')->on('t_formations')->onDelete('cascade');
            $table->foreign('id_etudiant')->references('id')->on('t_etudiant')->onDelete('cascade');
            $table->foreign('id_annee')->references('id')->on('tr_anneeuniv')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_souscriptions');
    }
}
