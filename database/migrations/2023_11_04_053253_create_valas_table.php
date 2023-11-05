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
        Schema::create('valas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_valas');
            $table->decimal('nilai_jual', 15, 2);
            $table->decimal('nilai_beli', 15, 2);
            $table->date('tanggal_rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valas');
    }
};
