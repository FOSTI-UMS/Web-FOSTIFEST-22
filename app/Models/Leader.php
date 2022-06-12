<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_name', 'name', 'email', 'ktm', 'idcard', 'competition_id', 'agency'
    ];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}
