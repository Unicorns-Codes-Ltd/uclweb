<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'icon',
        'cover',
        'short_description',
        'description',
        'home_page',
        'status'
    ];
}
