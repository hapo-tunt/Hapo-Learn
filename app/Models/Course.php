<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'courses';

    protected $fillable = [
        'cover',
        'avatar',
        'name',
        'price',
        'description',
    ];

    public function users()
    {
        return $this->belongsToMany(Users::class, 'users_courses', 'courses_id', 'users_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'courses_tag', 'courses_id', 'tags_id');
    }

    public function lessons()
    {
        return $this->hasMany(Lessons::class);
    }
}
