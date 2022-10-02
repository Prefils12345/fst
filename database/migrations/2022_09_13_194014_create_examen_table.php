<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_examen', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nature_examen",20);
            $table->string("resultat_examen",20);
            $table->string("observation",30);
            $table->string("session_examen",20);
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
        Schema::dropIfExists('tr_examen');
    }
}
