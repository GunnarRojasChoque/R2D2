<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambientes', function (Blueprint $table) {
            $table->increments('id');
             $table->string('nombre_aula',50);
             $table->integer('capacidad');
              $table->string('ubicacion',50);
            $table->timestamps();

            $table->integer('tipo_ambiente_id')->unsigned();
              $table->foreign('tipo_ambiente_id')->references('id')->on('tipo_ambientes')
            ->onUpdate('CASCADE')
            ->onDelete('NO ACTION');

            $table->integer('complemento_id')->unsigned();
              $table->foreign('complemento_id')->references('id')->on('complementos')
            ->onUpdate('CASCADE')
            ->onDelete('NO ACTION');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ambientes');
    }
}
