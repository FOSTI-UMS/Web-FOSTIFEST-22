<?php

namespace App\Imports;

use App\Models\Webinar;
use Maatwebsite\Excel\Concerns\ToModel;

class memberWebImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Webinar([
            'fullname' => $row['fullname'],
            'email' => $row['email'],
            'whatsapp' => $row['whatsapp'],
            'agency' => $row['agency'],
        ]);
    }
}
