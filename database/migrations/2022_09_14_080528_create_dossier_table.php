<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_dossier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_dossier',50)->unique();
            $table->string('pwd_dossier',70);
            $table->timestamp('date_creation')->default(now());
            $table->unsignedInteger('id_etudiant');
            $table->timestamps();
            $table->boolean("suppression_logique")->default(false);

            $table->foreign('id_etudiant')->references('id')->on('t_etudiant')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_dossier');
    }
}
