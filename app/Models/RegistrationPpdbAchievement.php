<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistrationPpdbAchievement extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'registration_ppdb_id',
        'name_achievement',
        'type_achievement',
        'year_achievement',
        'level_achievement',
        'organizer',
    ];
}
