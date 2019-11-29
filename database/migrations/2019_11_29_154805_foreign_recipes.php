<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignRecipes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('bahan', function (Blueprint $table) {
        $table->foreign('recipes_id')->references('id')->on('recipes');
      });

      Schema::table('alat', function (Blueprint $table) {
        $table->foreign('recipes_id')->references('id')->on('recipes');
      });

      Schema::table('tutorial', function (Blueprint $table) {
        $table->foreign('recipes_id')->references('id')->on('recipes');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('bahan', function (Blueprint $table) {
        $table->dropForeign('bahan_recipes_id_foreign');
      });

      Schema::table('alat', function (Blueprint $table) {
        $table->dropForeign('alat_recipes_id_foreign');
      });

      Schema::table('tutorial', function (Blueprint $table) {
        $table->dropForeign('tutorial_recipes_id_foreign');
      });
    }
}
