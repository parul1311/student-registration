<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'dob',
        'phone',
        'address',
        'avatar',
        'verify_by_admin',
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

    public function getAvatarAttribute($value)
    {
        $avatar = !empty($value) ? asset('storage/students/'.$value) : 'https://ui-avatars.com/api/?name='.$this->name.'&background=19B5FE&color=ffffff&v=19B5FE';
        return $avatar;
    }
    public function getRoleNameAttribute()
    {
        if (!empty($this->roles)) {
            if(@$this->roles[0])
            return $this->roles[0]->display_name;
            else
            return 'No Role';
        } else {
            return "No Role" ;
        }
    }
}
