<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCatdirsis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'catdirsis';
        $comments = 'Catalogo de direcciones del sistema';

        Schema::create($tableName, function (Blueprint $table) {
            $table->increments('cvedirsis')->comment("Clave");
            $table->unsignedInteger('cvemodsis')->nullable()->comment("Modulo del sistema");
            $table->string('nomdirsis', 50)->unique()->comment("Nombre");
            $table->string('dirdirsis', 100)->unique()->comment("Dirección");
            $table->string('icndirsis', 30)->comment("Icono");
            $table->unsignedInteger('orddirsis')->comment("Orden");

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
        Schema::dropIfExists('catdirsis');
    }
}
