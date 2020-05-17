<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Suplier extends Model
{
    //
use SoftDeletes;
protected $table  = "tbl_suplier";

protected $fillable = [
		"id",
		"kode_suplier",
		"nama_suplier",
		"alamat_suplier",
		"telepon_suplier",
		"description",
		"aktif_suplier",
];
protected $dates = ['deleted_at'];

}
