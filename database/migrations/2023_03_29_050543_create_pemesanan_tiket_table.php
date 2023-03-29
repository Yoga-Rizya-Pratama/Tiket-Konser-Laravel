<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pemesanan_tiket', function (Blueprint $table) {
            $table->id();
            $table->string('tiket_id');
            $table->string('nama_pemesan');
            $table->string('nomor_telepon_pemesan');
            $table->string('alamat_email_pemesan');
            $table->integer('jumlah_tiket');
            $table->integer('total_harga');
            $table->boolean('is_check_in');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemesanan_tiket');
    }
};
