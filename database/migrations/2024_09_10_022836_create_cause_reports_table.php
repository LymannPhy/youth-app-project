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
        Schema::create('cause_reports', function (Blueprint $table) {
            $table->foreignId('cause_id')->constrained()->onDelete('cascade');
            $table->enum('report_type', ['initial', 'progress', 'final']); 
            $table->date('report_date'); 
            $table->text('report');
            $table->text('challenges')->nullable();
            $table->text('solutions')->nullable();
            $table->boolean('submitted')->default(false);
            $table->foreignId('user_id');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cause_reports');
    }
};
