<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColmnsToTrAnneeunivTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tr_anneeuniv', function (Blueprint $table) {
            $table->boolean("suppression_logique")->default(false);
            //suppression logique TINYINT(1) DEFAULT 0
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumns("tr_anneeuniv","suppression_logique");
    }
}
