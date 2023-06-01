<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surgery extends Model
{
    use HasFactory;
    public function patient()
    {
        return $this->belongsTo(patient::class);
    }
    public function doctor()
    {
        return $this->belongsTo(doctor::class);
    }
}
