<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('student_absents', function (Blueprint $table) {
            $table->id();

            // Relasi ke students
            $table->foreignId('student_id')
                ->constrained('students')
                ->onDelete('cascade');

            // Relasi ke teachers (nullable)
            $table->foreignId('teacher_id')
                ->nullable()
                ->constrained('teachers')
                ->onDelete('set null');

            // Waktu masuk & pulang dari location_absents (nullable)
            $table->foreignId('location_check_in_id')
                ->nullable()
                ->constrained('location_absents')
                ->onDelete('set null');

            $table->foreignId('location_check_out_id')
                ->nullable()
                ->constrained('location_absents')
                ->onDelete('set null');

            // Info tambahan
            $table->string('subject')->nullable();
            $table->string('lesson_time')->nullable(); // Contoh: "07:30-08:15" atau "Jam Ke-1"

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_absents');
    }
};
