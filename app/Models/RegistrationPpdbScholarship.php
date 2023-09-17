<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistrationPpdbScholarship extends Model
{
    use HasFactory, SoftDeletes;



    protected $fillable = [
        'registration_ppdb_id',
        'type_scholarship',
        'description',
        'year_start',
        'year_finish'
    ];
}
