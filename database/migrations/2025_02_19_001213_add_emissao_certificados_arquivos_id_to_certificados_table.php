<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmissaoCertificadosArquivosIdToCertificadosTable extends Migration
{
    public function up()
    {
        Schema::table('certificados', function (Blueprint $table) {
            $table->unsignedBigInteger('emissao_certificados_arquivos_id')->nullable()->after('id'); // Adiciona o campo, ajustando a posição conforme necessário
            $table->foreign('emissao_certificados_arquivos_id')->references('id')->on('emissao_certificados_arquivos')->onDelete('cascade'); // Define a FK
        });
    }

    public function down()
    {
        Schema::table('certificados', function (Blueprint $table) {
            $table->dropForeign(['emissao_certificados_arquivos_id']); // Remove a FK
            $table->dropColumn('emissao_certificados_arquivos_id'); // Remove a coluna
        });
    }
}
