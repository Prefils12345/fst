<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_ue', function (Blueprint $table) {
            $table->increments("id");
            $table->string("libelle_ue",50)->unique();
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
        Schema::dropIfExists('tr_ue');
    }
}
