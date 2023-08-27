<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'user_id', 'total','discount'];
    protected $with = ['course'];



    // Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
