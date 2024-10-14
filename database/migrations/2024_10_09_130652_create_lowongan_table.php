<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowonganTable extends Migration
{
    public function up()
    {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->bigIncrements('ID_lowongan');
            $table->string('judul_lowongan', 255);
            $table->string('posisi', 255);
            $table->text('deskripsi');
            $table->text('persyaratan');
            $table->enum('status_lowongan', ['open', 'closed']);
            $table->string('kategori', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lowongan');
    }
}
