<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
