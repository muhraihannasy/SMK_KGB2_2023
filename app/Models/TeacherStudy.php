<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherStudy extends Model
{
    use HasFactory, SoftDeletes;



    protected $fillable = [
        'teacher_id',
        'class_id',
        'study_id',
    ];
}
