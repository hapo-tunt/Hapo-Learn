<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'documents';

    protected $fillable = [
        'lessons_id',
        'preview',
        'name',
        'title',
        'file',
    ];

    public function lessons()
    {
        return $this->belongsTo(Lessons::class);
    }
}
