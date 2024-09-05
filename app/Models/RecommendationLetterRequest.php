<?php

// app/Models/RecommendationLetterRequest.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecommendationLetterRequest extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'staff_id', 'purpose', 'status'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
}
}
