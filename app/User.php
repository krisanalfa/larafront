<?php

namespace App;

use Illuminate\Support\Arr;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, SoftDeletes;

    /**
     * {@inheritDoc}
     */
    protected $appends = ['point', 'balance', 'image'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
        'first_name', 'last_name',
        'sex', 'dob', 'phone', 'profile_picture'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get name attribute.
     *
     * @return string
     */
    protected function getNameAttribute()
    {
        return implode(
            ' ',
            Arr::only($this->attributes, ['first_name', 'last_name'])
        );
    }

    /**
     * Get point attribute.
     *
     * @return int
     */
    public function getPointAttribute()
    {
        return 0;
    }

    /**
     * Get balance attribute.
     *
     * @return int
     */
    public function getBalanceAttribute()
    {
        return 0;
    }
}
