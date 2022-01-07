<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'lessons';

    protected $fillable = [
        'courses_id',
        'title',
        'description',
        'requirments',
        'time',
    ];

    public function users()
    {
        return $this->belongsToMany(Users::class, 'users_lessons', 'lessons_id', 'users_id');
    }

    public function documents()
    {
        return $this->hasMany(Documents::class);
    }

    public function courses()
    {
        return $this->belongsTo(Courses::class);
    }
}
