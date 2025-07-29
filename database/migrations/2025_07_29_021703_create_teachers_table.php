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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_code', 100);
            $table->string('name', 100);
            $table->date('date_of_birth');
            $table->string('phone_number', 10);
            $table->string('email', 100);
            $table->text('address');
            $table->boolean('gender');
            $table->text('password');
            $table->foreignId('subject_department_id')->constrained('subject_departments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
