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
        Schema::create('tarombos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title_degree')->nullable(); // e.g. Raja, Ompu, Datu
            $table->integer('generation_level'); // Generasi ke- (1, 2, 3...)
            $table->foreignId('parent_id')->nullable()->constrained('tarombos')->onDelete('cascade');
            $table->foreignId('marga_id')->nullable()->constrained('margas')->onDelete('set null');
            $table->enum('gender', ['L', 'P'])->default('L');
            $table->text('biography')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarombos');
    }
};
