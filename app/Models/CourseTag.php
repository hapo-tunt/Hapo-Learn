<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseTag extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'courses_tag';

    protected $fillable = [
        'courses_id',
        'tags_id',
    ];
}
