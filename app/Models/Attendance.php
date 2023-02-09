<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['event', 'name', 'address', 'whatsapp', 'instagram', 'institution', 'time_visit', 'reason', 'info'];
}
