<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_specialite', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_specialite',40)->unique();
            $table->string('section',20);
            $table->string('cycle',20);
            $table->unsignedInteger('id_mention');
            $table->timestamps();


            $table->foreign('id_mention')->references('id')->on('t_mention')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_specialite');
    }
}
