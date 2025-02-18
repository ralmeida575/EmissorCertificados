<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmissaoCertificadoArquivosTable extends Migration
{
    public function up()
    {
        Schema::create('emissao_certificado_arquivos', function (Blueprint $table) {
            $table->id(); 
            $table->string('nomeArquivo'); 
            $table->integer('qtdeCertificados');
            $table->string('status'); 

            $table->dateTime('dataArquivo');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        
        Schema::dropIfExists('emissao_certificado_arquivos');
    }
}
