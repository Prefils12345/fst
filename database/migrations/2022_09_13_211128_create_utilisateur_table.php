<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_utilisateur', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nom_users",70);
            $table->string("prenom_users",70)->nullable();
            $table->string("tel_users",70)->nullable();
            $table->string("email_users",70)->nullable();
            $table->string("profil_users",70)->nullable();
            $table->string("login_users",70)->nullable();
            $table->string("pwd_users",200)->nullable();
            $table->boolean("suppression_logique")->default(false);
            $table->string("etat_users",6);
            $table->timestamp('date_creation')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tr_utilisateur');
    }
}
