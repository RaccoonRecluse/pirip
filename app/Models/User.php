<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    
    protected $fillable = ['name', 'password', 'access_level', 'email', 'avatar', 'experience', 'admission_cost', 'admission_duration', 'characteristic'];

    public $timestamps = false;
}
