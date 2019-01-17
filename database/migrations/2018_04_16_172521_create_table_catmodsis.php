<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCatmodsis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'catmodsis';
        $comments = 'Catalogo de módulos del sistema';

        Schema::create($tableName, function (Blueprint $table) {
            $table->increments('cvemodsis')->comment("Clave");
            $table->string('nommodsis', 50)->unique()->comment("Nombre");
            $table->string('dirmodsis', 100)->unique()->comment("Dirección");
            $table->string('icnmodsis', 30)->comment("Icono");
            $table->unsignedInteger('ordmodsis')->comment("Orden");
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
        Schema::dropIfExists('catmodsis');
    }
}
