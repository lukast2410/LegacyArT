<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
        'profile_image',
        'role_id',
        'nickname',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function creator(){
        return $this->hasOne(Creator::class);
    }

    public function role(){
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function arts(){
        return $this->hasMany(Art::class);
    }

    public function requests(){
        return $this->hasMany(Request::class);
    }

    public function bids(){
        return $this->hasMany(Bid::class);
    }

    public function isAdmin()
    {
        if ($this->role->name === "admin") {
            return true;
        } else {
            return false;
        }
    }
}
