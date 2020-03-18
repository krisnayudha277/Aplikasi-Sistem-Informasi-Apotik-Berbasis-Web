<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Obat extends Model{

use SoftDeletes;
protected $table  = "tbl_obat";

protected $fillable = [
		"id",
		"kode_obat",
		"kode_jenis",
		"kode_suplier",
		"nama_obat",
		"harga_jual_obat",
		"description"
];
protected $dates = ['deleted_at'];

}


?>