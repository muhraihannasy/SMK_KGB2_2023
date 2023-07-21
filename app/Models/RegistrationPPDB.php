<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistrationPPDB extends Model
{
    use HasFactory, SoftDeletes;



    protected $table = 'registration_ppdbs';

    protected $fillable = [
        'user_id',
        'payment_registration_id',
        'no_registration',
        'code_registration',
        'admin_name',
        'type_registration',

        // ============ Biodata ============ //
        'from_school',
        'weigth',
        'height',
        'amount_siblings',
        'gender',
        'special_needs',
        'order_family',
        'religion',
        'birth_place',
        'birth_date',
        'address',
        'competency_pick_1',
        'competency_pick_2',
        'competency_pick_3',
        'extracurricular_1',
        'extracurricular_2',
        'uniform_1',
        'uniform_2',
        'uniform_3',
        'uniform_4',

        // ============ Berkas ============ //
        'nisn',
        'nisn_image',
        'kartu_keluarga_image',
        'no_serial_skhus',
        'no_serial_diploma',
        'no_examinee',
        'no_kks',
        'image_kks',
        'receiver_kps',
        'no_kps',
        'image_kps',
        'receiver_kip',
        'name_kip',
        'reason_kip',
        'image_kip',

        // ============ Berkas ============ //
        'father_name',
        'father_nik',
        'father_birth_place',
        'father_birth_date',
        'father_education',
        'father_job',
        'father_income',
        'mother_name',
        'mother_nik',
        'mother_birth_place',
        'mother_birth_date',
        'mother_education',
        'mother_job',
        'mother_income',
        'batch',
        'status',
    ];

    public function getRouteKeyName(): string
    {
        return 'uuid';
    }
}
