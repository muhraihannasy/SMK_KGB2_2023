<?php

namespace App\Http\Controllers\Api\V1\Admin;

// Illuminate
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Controller
use App\Http\Controllers\Controller;

// Models
use App\Models\RegistrationPPDB;
use App\Models\Student;
use App\Models\User;

// Trait
use App\Traits\HttpResponseTrait;

class RegistrationPPDBController extends Controller
{
    use HttpResponseTrait;

    protected $table = RegistrationPPDB::class;
    protected $table_second = Student::class;
    protected $table_third = User::class;
    protected $table_third = User::class;

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

    public function store(Request $request)
    {
        $admin_name = Auth::user()->fullname;

        $user = $this->$table_third::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => $request->password
        ]);

        $payment_registration = $this->$table_third::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => $request->password
        ]);

        $this->table::create([
            'user_id' => $user->id,
            'admin_name' => $admin_name,
            'type_registration' => $request->type,
            'gender' => $request->type_registration,
            'religion' => $request->religion,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'address' => $request->address_combine,
            'nisn' => $request->nisn,
            'nisn_image' => $request->,
            'kartu_keluarga_image' => $request->,
            'no_serial_skhus' => $request->,
            'no_serial_diploma' => $request->,
            'no_examinee' => $request->no_examinee,
            'competency_pick_1' => $request->competency_pick_1,
            'competency_pick_2' => $request->competency_pick_2,
            'competency_pick_3' => $request->competency_pick_3,
            'extracurricular_1' => $request->extracurricular_1,
            'extracurricular_2' => $request->extracurricular_2,
            'no_kks' => $request->no_kks ?? null,
            'image_kks' => $request->image_kks ?? null,
            'receiver_kps' => $request->receiver_kps ?? null,
            'no_kps' => $request->no_kps ?? null,
            'image_kps' => $request->image_kps ?? null,
            'receiver_kip' => $request->receiver_kip ?? null,
            'no_kip' => $request->no_kip ?? null,
            'name_kip' => $request->name_kip ?? null,
            'reason_kip' => $request->reason_kip ?? null,
            'image_kip' => $request->image_kip ?? null,
            'batch' => $request->,
            'status' => 2,
        ]);
    }


}
