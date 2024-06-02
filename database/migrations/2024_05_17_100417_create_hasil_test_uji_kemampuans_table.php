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
        Schema::create('hasil_test', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_uji_kemampuan_id')->constrained('test_uji_kemampuan')->cascadeOnDelete();
            $table->foreignId('penduduk_id')->constrained('penduduk')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('hasil_test_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hasil_test_id')->constrained('hasil_test')->cascadeOnDelete();
            $table->foreignId('test_detail_id')->constrained('test_uji_kemampuan_detail')->cascadeOnDelete();
            $table->integer('nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_test_detail');
        Schema::dropIfExists('hasil_test');
    }
};
