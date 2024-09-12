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
        schema::table('students',function(Blueprint $table)
        {
            $table->string('course_name')->after('name')->nullable;
            $table->string('gender')->after('course_name')->nullable;
        }
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('students',function(Blueprint $table)
        {
            $table->dropColumn('course_name');
            $table->dropColumn('gender');
        }
    );
    }
};
