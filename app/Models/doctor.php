<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;
    public function addappointments()
    {
        return $this->hasMany(addappointment::class);
    }
    public function surgery()
    {
        return $this->hasMany(surgery::class);
    }
}
