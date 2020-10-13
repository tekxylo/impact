<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Alsofronie\Uuid\UuidModelTrait;
use Laravel\Fortify\TwoFactorAuthenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use TwoFactorAuthenticatable, UuidModelTrait, HasFactory, Notifiable, SoftDeletes;

    protected $fillable = ['name','email','password','tag','fav_trail','fav_vehicle','avatar_url'];
    protected $hidden = ['password','remember_token','two_factor_recovery_codes','two_factor_secret'];
    protected $dates = ['deleted_at', 'updated_at', 'created_at'];
    protected $casts = ['email_verified_at' => 'datetime'];
}
