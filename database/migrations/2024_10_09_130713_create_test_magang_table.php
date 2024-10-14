<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestMagangTable extends Migration
{
    public function up()
    {
        Schema::create('test_magang', function (Blueprint $table) {
            $table->bigIncrements('id_test_magang'); // Primary key
            $table->unsignedBigInteger('id_lamaran_magang'); // Foreign key
            $table->timestamps();

            // Foreign Key Constraints
            $table->foreign('id_lamaran_magang')->references('id_lamaran_magang')->on('lamaran_magang')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('test_magang');
    }
}
