<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\ToModel;

class DataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Data([
            'CPF' => $row[0],
            'private' => $row[1],
            'incompleto' => $row[2],
            'data_da_ultima_compra' => (date("Y-m-d", strtotime($row[3]))),
            'ticket_medio' => $row[4],
            'ticket_ultima_compra' => $row[5],
            'loja_mais_frequente' => $row[6],
            'loja_ultima_compra' => $row[7]
        ]);
    }

    /**
    * @return int
    */
    public function startRow(): int
    {
        return 2;
    }
}
