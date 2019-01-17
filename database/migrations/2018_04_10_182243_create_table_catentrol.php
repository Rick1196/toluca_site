<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCatentrol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'catentrol';
        $comments = 'Catalogo de roles usuario';
        Schema::create($tableName, function (Blueprint $table) {
            $table->increments('cveentrol')->comment('Clave rol');
            $table->string('nomentrol',120)->comment('Nombre rol');
            $table->string('desentrol',250)->comment('Descripción rol');
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
        Schema::dropIfExists('catentrol');
    }
}
