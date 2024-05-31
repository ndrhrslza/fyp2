<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            // Remove existing option columns
            $table->dropColumn(['option_1', 'option_2', 'option_3', 'option_4']);

            // Add foreign key to options table
            $table->foreignId('correct_option_id')->nullable()->constrained('options')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['correct_option_id']);

            // Re-add the removed columns
            $table->string('option_1');
            $table->string('option_2');
            $table->string('option_3')->nullable();
            $table->string('option_4')->nullable();
        });
    }
}
