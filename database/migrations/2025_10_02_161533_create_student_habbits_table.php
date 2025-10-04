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
        Schema::create('student_habbits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('habbit_id')->constrained('seven_habbits')->onDelete('cascade');

            $table->date('date'); 
            $table->time('time')->nullable(); 
            $table->string('status')->nullable();
            $table->string('photo_path')->nullable(); 
            $table->text('description')->nullable(); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student_habbits');
    }
};
