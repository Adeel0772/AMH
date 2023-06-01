<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addappointment extends Model
{
    
    use HasFactory;
    public function doctor()
    {
        return $this->belongsTo(doctor::class);
    }
    public function patient()
    {
        return $this->belongsTo(patient::class);
    }

}
