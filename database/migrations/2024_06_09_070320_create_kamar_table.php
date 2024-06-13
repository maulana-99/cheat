<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kamars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kamar');
            $table->enum('tipe_kamar', ['standard', 'superior', 'delux'])->default('standard');
            $table->enum('bed', ['single', 'twin', 'double', 'king'])->default('single');
            $table->enum('kapasitas', ['1', '2', '3', '4'])->default('1');
            $table->enum('status', ['1', '0'])->default('1');
            $table->integer('quantity');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamar');
    }
};
