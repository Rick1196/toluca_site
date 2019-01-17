<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkCatdirsisToCatmodsis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catdirsis', function (Blueprint $table) {
            //
            $table->foreign('cvemodsis')
                ->references('cvemodsis')
                ->on('catmodsis')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catdirsis', function (Blueprint $table) {
            //
            $table->dropForeign(['cvemodsis']);
        });
    }
}
