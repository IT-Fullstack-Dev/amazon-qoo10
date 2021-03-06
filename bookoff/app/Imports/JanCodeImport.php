<?php

namespace App\Imports;

use App\Models\Jan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
HeadingRowFormatter::default('none');

class JanCodeImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Jan([
            //
            'jan' => $row['Jan']
        ]);

    }

    public function headingRow(): int
    {
        return 1;
    }
}
