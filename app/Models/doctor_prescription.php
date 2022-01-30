<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor_prescription extends Model
{
    use HasFactory;
    protected $casts = [
        'medicine_prescription' => 'array',
        'frequency_prescription' => 'array',
        'note_prescription' => 'array',
    ] ;
}
