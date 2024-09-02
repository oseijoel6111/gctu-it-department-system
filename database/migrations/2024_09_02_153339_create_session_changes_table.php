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
        Schema::create('session_changes', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('student_id');
            $table->string('current_session'); 
            $table->string('requested_session');
            $table->text('reason'); 
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_changes');
    }
};
