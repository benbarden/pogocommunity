<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PokedexImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pokemon', function(Blueprint $table) {
            $table->string('sprite_normal', 255)->nullable();
            $table->string('sprite_shiny', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pokemon', function(Blueprint $table) {
            $table->dropColumn('sprite_normal');
            $table->dropColumn('sprite_shiny');
        });
    }
}
