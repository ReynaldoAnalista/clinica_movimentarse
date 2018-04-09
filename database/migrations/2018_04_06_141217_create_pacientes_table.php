<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_paciente');
            $table->date('dt_nascimento_paciente');
            $table->string('nm_pai');
            $table->string('nm_mae');
            $table->string('nm_responsavel');
            $table->string('nu_telefone');
            $table->string('nu_celular');
            $table->string('nm_indicacao');
            $table->string('nm_indicacao_clinica');
            $table->string('nm_email');
            $table->integer('id_tp_profissional');
            $table->integer('id_tipo_atendimento');
            $table->integer('id_convenio');
            $table->string('nu_carteira');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
