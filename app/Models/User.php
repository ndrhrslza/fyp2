<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login_at' => 'datetime',
    ];

    public function browserHistories()
    {
        return $this->hasMany(BrowserHistory::class);
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
    public function isUser()
    {
        return $this->role === 'user';
    }

    public function quizzes()
    {
        return $this->belongsToMany(Quiz::class)->withPivot('score', 'is_passed');
    }
}
