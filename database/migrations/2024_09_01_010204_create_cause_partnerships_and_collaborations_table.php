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
        Schema::create('cause_partnerships_and_collaborations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cause_id')->constrained()->onDelete('cascade');
            $table->foreignId('partnership_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cause_partnerships_and_collaborations');
    }
};
