<?php

namespace App\Exports;

use App\Obat;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataObat implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Obat::all();
    }
}
