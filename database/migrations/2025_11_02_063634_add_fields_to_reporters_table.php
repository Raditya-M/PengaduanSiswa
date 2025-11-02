<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('reporters', function (Blueprint $table) {
            $table->string('lokasi')->nullable()->after('kategori');
            $table->dateTime('waktu')->nullable()->after('lokasi');
            $table->string('gambar')->nullable()->after('waktu');
        });
    }

    public function down(): void
    {
        Schema::table('reporters', function (Blueprint $table) {
            $table->dropColumn(['lokasi', 'waktu', 'gambar']);
        });
    }
};
