<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    use HasFactory, SoftDeletes;



    protected $fillable = [
        'user_id',
        'role_id',
        'fullname',
        'phone',
        'photo'
    ];
}
