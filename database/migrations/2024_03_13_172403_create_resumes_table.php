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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->longText('cover_letter');
            $table->foreignId('education_id')->constrained()->cascadeOnDelete();
            $table->foreignId('experiences_id')->constrained()->cascadeOnDelete();
            $table->foreignId('skills_id')->constrained()->cascadeOnDelete();
            $table->foreignId('awards_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
