<?php

namespace App\Http\Controllers\Api\V1\Admin;

// Illuminate
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

// Controller
use App\Http\Controllers\Controller;

// Models
use App\Models\RegistrationPPDB;
use App\Models\Student;

// Trait
use App\Traits\HttpResponseTrait;

class RegistrationPPDBController extends Controller
{
    use HttpResponseTrait;

    protected $table = RegistrationPPDB::class;

    public function index()
    {
        $registration = $this->table::all();
        return $this->successReponse($registration, 200);
    }

    public function show(RegistrationPPDB $registration)
    {
        // $registration = $this->table::all();
        return $this->successReponse($registration, 200);
    }

    public function changeStatus(Request $request, RegistrationPPDB $registration)
    {
        try {
            DB::beginTransaction();

            $registration->status = $request->status;
            $registration->save();

            $this->updateStudent($registration);

            DB::commit();
        } catch(QueryException $e) {
            DB::rollBack();
            $this->errorResponse($e->getMessage(), 500);
        }

        return $this->successReponse(null, 200);
    }


    public function updateStudent($registration)
    {
        Student::create([
            'user_id' => $registration->user_id,
            'payment_monthly_id' => $registration->,
            'competency_id' => $registration->,
            'gender' => $registration->,
            'religion' => $registration->,
            'religion' => $registration->,
            'birth_place' => $registration->,
            'birth_date' => $registration->,
            'birth_date' => $registration->,
            'address' => $registration->,
            'nisn' => $registration->,
            'nisn_image' => $registration->,
            'kartu_keluarga_image' => $registration->,
            'no_serial_skhus' => $registration->,
            'no_serial_diploma' => $registration->,
            'no_examinee' => $registration->,
            'class_pick' => $registration->,
            'extracurricular' => $registration->,
            'no_kks' => $registration->,
            'image_kks' => $registration->,
            'receiver_kps' => $registration->,
            'no_kps' => $registration->,
            'image_kps' => $registration->,
            'receiver_kip' => $registration->,
            'name_kip' => $registration->,
            'reason_kip' => $registration->,
            'image_kip' => $registration->,
            'academic_year' => $registration->,
            'status' => $registration->,
        ]);
    }


}
