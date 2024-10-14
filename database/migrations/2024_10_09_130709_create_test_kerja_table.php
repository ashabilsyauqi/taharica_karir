<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestKerjaTable extends Migration
{
    public function up()
    {
        Schema::create('test_kerja', function (Blueprint $table) {
            $table->bigIncrements('id_test_kerja'); // Primary key
            $table->unsignedBigInteger('id_lamaran_kerja'); // Foreign key
            $table->timestamps();

            // Foreign Key Constraints
            $table->foreign('id_lamaran_kerja')->references('id_lamaran_kerja')->on('lamaran_kerja')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('test_kerja');
    }
}
