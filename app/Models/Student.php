<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function studentSession()
    {
        return $this->belongsTo(StudentSession::class);
    }
}
