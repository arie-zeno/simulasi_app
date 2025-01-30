<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements AuthenticatableContract
{
    use Authenticatable, HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password'];
}
