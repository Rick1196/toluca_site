<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPersonalinfoReplies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('replies', function (Blueprint $table) {
            $table->unsignedInteger('id_forum')->after('id');
            $table->string('nombre')->after('content');
            $table->string('apellidos')->after('nombre');
            $table->string('correo')->after('apellidos');

            $table->foreign('id_forum')->references('id')->on('forums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('replies', function (Blueprint $table) {
            $table->drop('nombre');
            $table->drop('apellidos');
            $table->drop('correo');
            $table->dropForeign(['id_forum']);
        });
    }
}
