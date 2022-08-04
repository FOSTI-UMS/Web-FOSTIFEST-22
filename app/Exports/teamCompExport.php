<?php

namespace App\Exports;

use App\Models\Competition;
use Maatwebsite\Excel\Concerns\FromCollection;

class teamCompExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Competition::select('name', 'email')->where('user_id', '!=', null)->get();
    }

    /**
     * @return response()
     */

    public function headings(): array
    {
        return ["Nama Tim", "Email"];
    }
}
