<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'cover',
        'current_price',
        'regular_price',
        'materials',
        'short_description',
        'description',
        'curriculam',
        'time_duration',
        'media_link',
        'rating_number',
        'rating_quantity',
        'instructor_id',
        'user_id',
        'category_id',
        'status'
    ];

    protected $with = ['instructor','batches'];


    // Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Instructor
    public function instructor()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the comments for the Course
     */
    public function batches()
    {
        return $this->hasMany(Batch::class, 'course_id', 'id');
    }

}
