<?php

namespace App\Imports;

use App\JenisObat;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class DataJenisObat2 implements ToModel
{
    /**
    * @param Collection $collection
    */

    public function model(array $row)
    {
        return new JenisObat([
            //
            'id' => $row[0],
            'kode_jenis' => $row[1], 
            'nama_jenis' => $row[2], 
            'description' => $row[3],
            'aktif_jenis' => $row[4], 
            'harga_jual_obat' => $row[5],
        ]);
    }
}
