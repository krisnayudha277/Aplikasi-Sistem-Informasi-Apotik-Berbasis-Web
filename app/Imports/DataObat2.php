<?php

namespace App\Imports;

use App\Obat;
use Maatwebsite\Excel\Concerns\ToModel;

class DataObat2 implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Obat([
            //
            'id' => $row[0],
            'kode_obat' => $row[1], 
            'kode_jenis' => $row[2], 
            'kode_suplier' => $row[3],
            'nama_obat' => $row[4], 
            'harga_jual_obat' => $row[5],
            'description' => $row[6],
        ]);
    }
}
