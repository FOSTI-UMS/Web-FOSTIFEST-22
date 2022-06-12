<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname', 'email', 'whatsapp', 'agency', 'ktm', 'sg_1', 'sg_2', 'sg_3', 'payment'
    ];
}
