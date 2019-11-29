<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('comments', function (Blueprint $table) {
        $table->foreign('recipes_id')->references('id')->on('recipes');
        $table->foreign('users_id')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table){
          $table->dropForeign('comments_recipes_id_foreign');
          $table->dropForeign('comments_users_id_foreign');
        });
    }
}
