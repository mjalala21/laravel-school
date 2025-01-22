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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('student_id');
            $table->string('student_name',50); 
            $table->string('course')->nullable;
            $table->string('student_gender')->nullable;
            $table->string('email')->nullable;
            $table->string('password');
            $table->rememberToken();
            $table->text('student_address')->nullable;
            $table->date('student_date_of_birth')->nullable;
            // $table->string('type 1');
            // $table->bigIncrements('teacher_id');
            $table->string('teacher_name',50);
            $table->string('subject_assigned')->nullable;
            $table->string('teacher_contact')->nullable;
            $table->text('teacher_address')->nullable;
            $table->text('teacher_date_of_birth')->nullable;
            // $table->string('type 2');
         $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
