<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeTiedotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiedots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('phnum');
            $table->text('osoite');
            $table->string('etunimi');
            $table->string('sukunimi');
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
        Schema::dropIfExists('tiedots');
    }
}