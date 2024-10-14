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
            $table->id();
            $table->string('name'); // Nama user
            $table->string('email')->unique(); // Email unik
            $table->timestamp('email_verified_at')->nullable(); // Email verifikasi
            $table->string('password'); // Password
            $table->string('usertype')->default('user'); // User type, default 'user'
            $table->string('no_hp')->nullable(); // Nomor handphone
            $table->string('cv')->nullable(); // Path file CV
            $table->string('alamat')->nullable(); // Alamat user
            $table->date('tanggal_lahir')->nullable(); // Tanggal lahir user
            $table->rememberToken(); // Token remember me
            $table->timestamps(); // Created at dan Updated at
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
