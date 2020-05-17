<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_obat', function (Blueprint $table) {
          $table->id();
            $table->string('kode_obat');
            $table->string('kode_jenis');
            $table->string('kode_suplier');
            $table->string('nama_obat');
            $table->decimal('harga_jual_obat');
            $table->string('description');
            $table->string('stok');
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
        Schema::dropIfExists('tbl_obat');
    }
}
