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
        Schema::create('galeris', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category')->default('Kegiatan Organisasi'); // Kegiatan Organisasi, Rapat & Pertemuan, Pesta & Perayaan, Sosial & Budaya, Pelatihan & Seminar
            $table->integer('year')->default(2026);
            $table->string('location')->nullable();
            $table->date('event_date')->nullable();
            $table->integer('photo_count')->default(15);
            $table->string('thumbnail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeris');
    }
};
