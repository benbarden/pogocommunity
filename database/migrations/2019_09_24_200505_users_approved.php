<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersApproved extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->tinyInteger('is_approved')->nullable();
            $table->text('user_roles')->nullable();
            $table->tinyInteger('is_owner')->nullable();
            $table->tinyInteger('is_staff')->nullable();
        });

        DB::update("UPDATE users SET is_approved = '1', is_owner = '1', is_staff = '1' WHERE id = 1");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropColumn('is_approved');
            $table->dropColumn('user_roles');
            $table->dropColumn('is_owner');
            $table->dropColumn('is_staff');
        });
    }
}
