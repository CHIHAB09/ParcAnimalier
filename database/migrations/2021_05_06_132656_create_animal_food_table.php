<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_food', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('animal_id');
            $table->foreign('animal_id')
            ->references('id')
            ->on('animals')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('food_id');
            $table->foreign('food_id')
            ->references('id')
            ->on('food')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_food');
    }
}
