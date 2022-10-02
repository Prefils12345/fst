<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_etablissement', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nom_etablissement",50);
            $table->string("tel_etablissement",30);
            $table->string("fax_etablissement",30);
            $table->string("siteweb_etablissement",30);
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
        Schema::dropIfExists('tr_etablissement');
    }
}
