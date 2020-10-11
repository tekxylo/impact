<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alsofronie\Uuid\UuidModelTrait;

class DiscordConnection extends Model
{
    use HasFactory, UuidModelTrait;

    protected $fillable = [
        'id',
        'oaccount',
        'discord_id',
        'discord_username',
        'discord_tag',
        'discord_email',
        'email_confirmed',
        'avatar'
    ];

    protected $dates = ['deleted_at', 'updated_at', 'created_at'];
}
