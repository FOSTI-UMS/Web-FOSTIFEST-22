<?php

namespace App\Exports;

use App\Models\Leader;
use App\Models\Member1;
use App\Models\Member2;
use Maatwebsite\Excel\Concerns\FromCollection;

class memberCompExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $member = Member1::select('team_name', 'email', 'name', 'agency')->get();
        $member2 = Member2::select('team_name', 'email', 'name', 'agency')->get();
        $leader = Leader::select('team_name', 'email', 'name', 'agency')->get();
        $result = array($member, $member2, $leader);
        return collect($result);
    }

    /**
     * @return response()
     */

    public function headings(): array
    {
        return ["Nama Tim", "Email", "Nama", "Instansi"];
    }
}
