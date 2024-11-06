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
        Schema::table('prodi', function (Blueprint $table) {
            $table->foreign(['ID_Fakultas'], 'prodi_ibfk_1')->references(['ID_Fakultas'])->on('fakultas')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prodi', function (Blueprint $table) {
            $table->dropForeign('prodi_ibfk_1');
        });
    }
};
