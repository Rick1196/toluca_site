<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitleDenuncia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbldenuncia', function (Blueprint $table) {
            $table->string('titulo')->after('id');
            $table->UnsignedInteger('id_topic')->after('status');
            $table->foreign('id_topic')->references('id')->on('topics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbldenuncia', function (Blueprint $table) {
            $table->drop('titulo');
            $table->dropForeign(['id_topic']);
        });
    }
}
