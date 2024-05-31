<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description', // Include description as fillable
        'status', // Include description as fillable
        'passing_score', // Include description as fillable
        'course_name', // Include course_name as fillable
    ];
    // public function course()
    // {
    //     return $this->belongsTo(Course::class);
    // }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
