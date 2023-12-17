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
        Schema::create('registration', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->text('alamat_ktp');
            $table->string('alamat_saat_ini');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->integer('nomor_telepon');
            $table->string('email');
            $table->string('kewarganegaraan');
            $table->dateTime('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('kabupaten_lahir');
            $table->string('provinsi_lahir');
            $table->string('jenis_kelamin');
            $table->string('status_nikah');
            $table->string('agama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration');
    }
};
