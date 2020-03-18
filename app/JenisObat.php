<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisObat extends Model{

use SoftDeletes;
protected $table  = "tbl_jenis";

protected $fillable = [
		"id",
		"kode_jenis",
		"nama_jenis",
		"description",
		"aktif_jenis",
		"harga_jual_obat"
];
protected $dates = ['deleted_at'];
}


?>