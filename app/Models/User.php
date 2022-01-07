<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = 'users';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'avatar',
        'username',
        'password',
        'role',
        'full_name',
        'phone_number',
        'birthday',
        'address',
        'about_me',
        'email',
        'facebook',
        'slack',
        'teaching_exp',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

    public function lessons()
    {
        return $this->belongsToMany(Lessons::class, 'users_lessons', 'users_id', 'lessons_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Courses::class, 'users_courses', 'users_id', 'courses_id');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
