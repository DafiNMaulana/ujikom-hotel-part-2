<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kamar_id')->nullable();
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');
            $table->integer('jumlah_kamar_dipesan');
            $table->string('nama_pemesan');
            $table->string('email_pemesan');
            $table->string('no_hp');
            $table->string('nama_tamu');
            $table->enum('status_pemesanan', ['unpaid', 'checkin', 'checkout', 'cancel']);
            $table->dateTime('tanggal_pesan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanans');
    }
}
