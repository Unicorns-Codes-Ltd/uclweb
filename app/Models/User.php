<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Contracts\Auth\MustVerifyEmail;


// implements MustVerifyEmail
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'designation',
        'biography',
        'pp',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];



    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mycourses(): HasMany
    {
        return $this->hasMany(Course::class, 'instructor_id', 'id');
    }

    // /**
    //  * Get all of the enrolled courses from the student
    //  */
    public function encourses()
    {
        return $this->hasMany(EnrollmentItem::class, 'user_id', 'id')
            ->join('courses', 'enrollment_items.course_id', 'courses.id');
    }

    public function pencourses()
    {
        return $this->hasMany(EnrollmentItem::class, 'user_id', 'id')
            ->join('courses', 'enrollment_items.course_id', 'courses.id')->where('enrollment_items.status','1');
    }

    public function aencourses()
    {
        return $this->hasMany(EnrollmentItem::class, 'user_id', 'id')
            ->join('courses', 'enrollment_items.course_id', 'courses.id')->where('enrollment_items.status','2');
    }
}
