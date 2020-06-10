<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrucksListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('marke_id');
            $table->integer('gamybos_metai');
            $table->string('vardas_pavarde');
            $table->integer('savinink_sk');
            $table->text('komentaras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trucks_lists');
    }
}
