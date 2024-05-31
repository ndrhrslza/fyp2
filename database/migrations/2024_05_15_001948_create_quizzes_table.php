<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    public function up()
    {
        Schema::table('quizzes', function (Blueprint $table) {
            // Drop the foreign key constraint
            //$table->dropForeign(['course_id']);

            // Optionally, you can also drop the column itself if it's no longer needed
            // $table->dropColumn('course_id');
        });
    }

    public function down()
    {
        Schema::table('quizzes', function (Blueprint $table) {
            // If you dropped the column in the "up" method, you can re-add it here
             //$table->unsignedBigInteger('course_id');

            // If you dropped the foreign key constraint in the "up" method, you can re-add it here
             //$table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }
}
