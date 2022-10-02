<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_formations', function (Blueprint $table) {
            $table->increments('id');
            $table->string("labelformation", 50);
            $table->unsignedInteger('id_specialite');
            $table->boolean("suppression_logique")->default(false);
            $table->timestamps();

            $table->foreign('id_specialite')->references('id')->on('t_specialite')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations');
    }
}
