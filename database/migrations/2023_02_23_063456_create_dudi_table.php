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
        Schema::create('dudi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dudi');
            $table->string('nohp_dudi');
            $table->string('email_dudi');
            $table->string('alamat_dudi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dudi');
    }
};
