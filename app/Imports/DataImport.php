<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Hash;
use Maatwebsite\Excel\Concerns\Importable;

class DataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $row = array_values(array_filter($row, 'strlen'));
        // $row = array_chunk($row[0], 7   );
        // $result = array_map('trim', $row);
        // $row = trim($row);
                // print_r($result);    
                // print_r($row[3]);
                // var_dump($row[1]);
            //     var_dump($row[3]);
            //     var_dump(strtotime(var_dump($row[3])));
            //    var_dump(date("Y-m-d", strtotime($row[3])));
                // $row[3] = '2020-02-13 00:00:00';
        // var_dump($row);
        // print_r($row['cpf']);
        // print_r($row['private']);
        // print_r($row['incompleto']);
        // print_r($row['data_da_ultima_compra']);
        // die();
        // $date = ($row[3]);
        // $date = new DateTime($date);
        // echo $date->format('Y-m-d H:i:s');
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