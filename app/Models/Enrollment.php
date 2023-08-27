<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'trxid',
        'total',
        'bkash_number',
        'user_id',
        'status',
    ];

    protected $with = [
        'user',
        'enrollmentitems'
    ];





    /**
     * Get the user that owns the Enrollment
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }



    /**
     * Get all of the comments for the Enrollment
     */
    public function enrollmentitems()
    {
        return $this->hasMany(EnrollmentItem::class, 'enrollment_id', 'id');
    }
}
