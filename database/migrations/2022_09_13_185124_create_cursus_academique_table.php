<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursusAcademiqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_cursus', function (Blueprint $table) {
            $table->increments("id");
            $table->string("annee_cursus",20);
            $table->string("niveau_cursus",20);
            $table->string("filiere",30);
            $table->string("institut",30);
            $table->string("resultat",20);
            $table->boolean("suppression_logique")->default(false);
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
        Schema::dropIfExists('tr_cursus');
    }
}
