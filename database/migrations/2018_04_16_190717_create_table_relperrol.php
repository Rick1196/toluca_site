<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRelperrol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'relperrol';
        $comments = 'Relación permisos usuarios modulos dirección';
        Schema::create('relperrol', function (Blueprint $table) {
            $table->increments('cveperrol')->comment('clave');
            $table->unsignedInteger('cveentrol')->nullable()->comment('clave rol');
            $table->unsignedInteger('cvemodsis')->nullable()->comment('clave modulo');
            $table->unsignedInteger('cvedirsis')->nullable()->comment('clave dirección');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `$tableName` comment '".$comments."'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relperrol');
    }
}
