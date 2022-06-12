<?php

namespace App\Models;

use App\Models\User;
use App\Models\Leader;
use App\Models\Member1;
use App\Models\Member2;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'payment', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function leader()
    {
        return $this->hasOne(Leader::class);
    }

    public function member1()
    {
        return $this->hasOne(Member1::class);
    }

    public function member2()
    {
        return $this->hasOne(Member2::class);
    }
}
