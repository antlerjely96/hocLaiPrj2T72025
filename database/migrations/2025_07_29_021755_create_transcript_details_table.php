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
        Schema::create('transcript_details', function (Blueprint $table) {
            $table->decimal('mark', 5, 2);
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('transcript_id')->constrained('transcripts');
            $table->primary(['student_id', 'transcript_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transcript_details');
    }
};
