<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * NOTA: na branch v3.0-authN-public do professor esta coluna já deve
     * existir (o enunciado do Ticket #006 afirma isso). Esta migration é
     * um placeholder para manter este projeto local executável; se a sua
     * migration original de eventos/perguntas já tiver "is_public", apague
     * este arquivo em vez de rodar os dois.
     */
    public function up(): void
    {
        Schema::table('perguntas', function (Blueprint $table) {
            $table->boolean('is_public')->default(false)->after('status');
        });
    }

    public function down(): void
    {
        Schema::table('perguntas', function (Blueprint $table) {
            $table->dropColumn('is_public');
        });
    }
};
