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
        Schema::connection('mysql4')->create('deliveris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->date('tanggal');
            $table->string('status');
            $table->integer('jumlah');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::connection('mysql4')->dropIfExists('deliveris');
    }
};
