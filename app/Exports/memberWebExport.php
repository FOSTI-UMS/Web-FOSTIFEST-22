<?php

namespace App\Exports;

use App\Models\Webinar;
use Maatwebsite\Excel\Concerns\FromCollection;

class memberWebExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Webinar::select('fullname', 'email', 'whatsapp', 'agency')->get();
    }

    /**
     * @return response()
     */

    public function headings(): array
    {
        return ["Nama Lengkap", "Email", "WA", "Instansi"];
    }
}
