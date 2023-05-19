<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];


    public function roles()
    {
        // return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id')->withTimestamps();
        return $this->belongsToMany(Role::class,);
    }
}
