<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->dateTime('entrer');
            $table->dateTime('sortie')->nullable();
            $table->dateTime('age');
            $table->string('sexe',65);
            $table->unsignedTinyInteger('poids');
            $table->binary('actif');
            $table->timestamps();
            $table->foreignId('food_id')->references('id')->on('animal_food');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
