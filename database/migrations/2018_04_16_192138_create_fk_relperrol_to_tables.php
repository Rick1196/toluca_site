<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkRelperrolToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('relperrol', function (Blueprint $table) {
            //
            $table->foreign('cveentrol')
                ->references('cveentrol')
                ->on('catentrol')
                ->onDelete('set null');
            $table->foreign('cvemodsis')
                ->references('cvemodsis')
                ->on('catmodsis')
                ->onDelete('set null');
            $table->foreign('cvedirsis')
                ->references('cvedirsis')
                ->on('catdirsis')
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
        Schema::table('relperrol', function (Blueprint $table) {
            //
            $table->dropForeign(['cveentrol']);
            $table->dropForeign(['cvemodsis']);
            $table->dropForeign(['cvedirsis']);
        });
    }
}
