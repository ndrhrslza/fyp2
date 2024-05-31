<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdfFilesTable extends Migration
{
    public function up()
    {
        Schema::create('pdf_files', function (Blueprint $table) {
            $table->id();
            $table->string('file_path');
            $table->string('chapter');
            $table->string('course');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pdf_files');
    }
}
