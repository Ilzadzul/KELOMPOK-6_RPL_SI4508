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
        Schema::create('test_uji_kemampuan_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_uji_kemampuan_id')->constrained('test_uji_kemampuan')->cascadeOnDelete();
            $table->string('nama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_uji_kemampuan_detail');
    }
};
