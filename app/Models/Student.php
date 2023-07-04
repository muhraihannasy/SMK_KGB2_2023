<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'payment_monthly_id',
        'competency_id',
        'gender',
        'religion',
        'religion',
        'birth_place',
        'birth_date',
        'birth_date',
        'address',
        'nisn',
        'nisn_image',
        'kartu_keluarga_image',
        'no_serial_skhus',
        'no_serial_diploma',
        'no_examinee',
        'class_pick',
        'extracurricular',
        'no_kks',
        'image_kks',
        'receiver_kps',
        'no_kps',
        'image_kps',
        'receiver_kip',
        'name_kip',
        'reason_kip',
        'image_kip',
        'academic_year',
        'status',
    ];
}
