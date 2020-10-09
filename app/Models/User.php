<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Alsofronie\Uuid\UuidModelTrait;

class User extends Authenticatable
{
    use UuidModelTrait, HasFactory, Notifiable, SoftDeletes;

    protected $fillable = ['name','email','password','tag'];
    protected $hidden = ['password','remember_token',];
    protected $dates = ['deleted_at', 'updated_at', 'created_at'];
    protected $casts = ['email_verified_at' => 'datetime'];
}
