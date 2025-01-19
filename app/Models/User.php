<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uuid',        // UUID identifier
        'n',         // User's name
        'e',         // User's email
        'p',         // User's password
        'ph',        // User's phone number
        'r',         // User's role ('u' or 'a')
        't_e',       // Trial end date
        's_s',       // Subscription start date
        's_e',       // Subscription end date
        'pl',        // Subscription plan ('w', 'm', 'y')
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'p',          // Hide password
        'remember_token', // Hide remember_token
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        's_s' => 'datetime',   // Cast subscription start to datetime
        's_e' => 'datetime',   // Cast subscription end to datetime
        't_e' => 'datetime',   // Cast trial end to datetime
    ];

    /**
     * Determine if the user's subscription is still active.
     *
     * @return bool
     */
    public function getIsActiveAttribute(): bool
    {
        return $this->s_e && $this->s_e->isFuture(); // Check if subscription end date is in the future
    }
}
