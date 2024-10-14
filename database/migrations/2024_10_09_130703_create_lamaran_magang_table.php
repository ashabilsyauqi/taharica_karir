<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLamaranMagangTable extends Migration
{
    public function up()
    {
        Schema::create('lamaran_magang', function (Blueprint $table) {
            $table->bigIncrements('ID_lamaran_magang');
            $table->unsignedBigInteger('user_id'); // Foreign key untuk user
            $table->unsignedBigInteger('ID_lowongan');
            $table->enum('status_lamaran', ['applied', 'rejected', 'approved']);
            $table->timestamps();

            // Foreign Key Constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Sesuai primary key 'id'
            $table->foreign('ID_lowongan')->references('ID_lowongan')->on('lowongan')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lamaran_magang');
    }
}
