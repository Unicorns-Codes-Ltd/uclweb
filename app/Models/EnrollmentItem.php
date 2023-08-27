<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollmentItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
        'batch_id',
        'enrollment_id',
        'status',
    ];

    protected $with =['course','batch'];

    /**
     * Get the user associated with the EnrollmentItem
     */
    public function course()
    {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }

    /**
     * Get the user associated with the EnrollmentItem
     */
    public function batch()
    {
        return $this->hasOne(Batch::class, 'id', 'batch_id');
    }
}
