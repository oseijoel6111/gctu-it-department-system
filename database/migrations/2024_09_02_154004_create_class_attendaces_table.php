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
        Schema::create('class_attendaces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id'); 
            $table->foreignId('course_id'); 
            $table->date('attendance_date');
            $table->enum('status', ['Present', 'Absent', 'Excused']);
            $table->string('attendance_form_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_attendaces');
    }
};
