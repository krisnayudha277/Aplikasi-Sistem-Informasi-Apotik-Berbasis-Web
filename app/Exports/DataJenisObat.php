<?php

namespace App\Exports;

use App\JenisObat;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataJenisObat implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         return JenisObat::all();
    }
}
