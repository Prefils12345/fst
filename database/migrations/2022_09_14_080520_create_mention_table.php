<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_mention', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_mention',30);
            $table->integer('semaine')->default(0);
            $table->string('code',20)->nullable();
            $table->string('intitulé',20)->nullable();
            $table->unsignedInteger('id_ue');
            $table->string('type_formation',30)->nullable();
            $table->integer('volc_par_ue')->default(0);
            $table->integer('volc_par_sem')->default(0);
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
        Schema::dropIfExists('t_mention');
    }
}
