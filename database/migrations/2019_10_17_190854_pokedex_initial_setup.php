<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PokedexInitialSetup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {

            $table->string('pokemon_no', 4);
            $table->string('pokemon_name', 50);
            $table->tinyInteger('generation');
            $table->tinyInteger('is_available');
            $table->tinyInteger('is_regional');
            $table->tinyInteger('is_legendary');
            $table->tinyInteger('is_mythical');
            $table->tinyInteger('buddy_distance')->nullable();
            $table->tinyInteger('has_shiny');

            $table->unique('pokemon_no', 'pokemon_no');
            $table->index('generation', 'generation');
            $table->index('is_available', 'is_available');
            $table->index('is_regional', 'is_regional');
            $table->index('is_legendary', 'is_legendary');
            $table->index('is_mythical', 'is_mythical');
            $table->index('has_shiny', 'has_shiny');

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
        Schema::dropIfExists('pokemon');
    }
}
