<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnneeUniversitaireTable extends Migration
{
   public function up()
   {
        Schema::create("tr_anneeuniv", function(Blueprint $table){
            $table->increments("id");
            $table->string("libelle_anneeuniv",20)->unique()->nullable();
            $table->timestamp('date_creation')->default(now());
        });
   }

   public function down()
   {
        Schema::dropIfExists("tr_anneeuniv");
   }
}
