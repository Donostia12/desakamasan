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
        Schema::create('Pengurus_desa', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama');
            $table->string('image');
            $table->string('jabatan');
            $table->string('whatsapp');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pengurus_desa');
    }
};
