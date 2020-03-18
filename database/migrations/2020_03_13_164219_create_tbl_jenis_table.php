<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblJenisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_jenis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_obat');
            $table->string('nama_jenis');
            $table->string('description');
            $table->string('aktif_jenis');
            $table->decimal('harga_jual_obat');
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
        Schema::dropIfExists('tbl_jenis');
    }
}
