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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_code', 100);
            $table->string('name', 100);
            $table->date('date_of_birth');
            $table->string('phone_number', 10);
            $table->string('email', 100);
            $table->text('address');
            $table->boolean('gender');
            $table->text('password');
            $table->foreignId('classroom_id')->constrained('classrooms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
