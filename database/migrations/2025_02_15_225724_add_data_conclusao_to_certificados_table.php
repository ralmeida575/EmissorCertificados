<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('certificados', function (Blueprint $table) {
            $table->date('data_conclusao')->after('data_emissao'); // Adiciona a coluna data_conclusao após data_emissao

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('certificados', function (Blueprint $table) {
             $table->dropColumn('data_conclusao'); // Remove a coluna data_conclusao, caso precise reverter a migration

        });
    }
};
