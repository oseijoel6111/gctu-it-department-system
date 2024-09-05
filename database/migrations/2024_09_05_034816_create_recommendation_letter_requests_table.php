<?php

// database/migrations/xxxx_xx_xx_create_recommendation_letter_requests_table.php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendationLetterRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('recommendation_letter_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('staff_id')->nullable()->constrained()->onDelete('set null');
            $table->string('purpose');
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recommendation_letter_requests');
}
}