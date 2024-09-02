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
        Schema::create('deferments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->string('reason');
            $table->string('deferment_type');
            $table->date('deferred_from');
            $table->date('deffered_to');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deferments');
    }
};
