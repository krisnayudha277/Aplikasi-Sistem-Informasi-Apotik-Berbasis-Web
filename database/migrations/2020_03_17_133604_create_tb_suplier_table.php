<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSuplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_suplier', function (Blueprint $table) {
            $table->id();
            $table->string('kode_suplier');
            $table->string('nama_suplier');
            $table->string('alamat_suplier');
            $table->string('telepon_suplier');
            $table->string('description');
            $table->decimal('aktif_suplier');
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
        Schema::dropIfExists('tb_suplier');
    }
}
