<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'reviews';

    protected $fillable = [
        'users_id',
        'time',
        'star_rate',
        'message',
        'type',
        'target_id',
    ];

    public function users()
    {
        return $this->belongsTo(Users::class);
    }
}
