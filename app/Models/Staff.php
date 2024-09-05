<?php

// app/Models/Staff.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'position'];

    public function recommendationLetterRequests()
    {
        return $this->hasMany(RecommendationLetterRequest::class);
}
}