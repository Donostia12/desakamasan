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
        Schema::create('menubuilder', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('k1');
            $table->string('k2');
            $table->string('k3');
            $table->string('k4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menubuilder');
    }
};
