<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkTbldenucia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbldenuncia', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users');
        });

        Schema::table('denunciareplies', function (Blueprint $table) {
            $table->foreign('id_denuncia')->references('id')->on('tbldenuncia');
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
            //
            $table->dropForeign(['id_user']);
        });
        Schema::table('denunciareplies', function (Blueprint $table) {
            //
            $table->dropForeign(['id_denuncia']);
        });
    }
}
