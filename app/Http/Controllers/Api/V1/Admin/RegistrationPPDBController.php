<?php

namespace App\Http\Controllers\Api\V1\Admin;

// Illuminate
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Controller
use App\Http\Controllers\Controller;
use App\Models\PaymentRegistration;

// Models
use App\Models\RegistrationPPDB;
use App\Models\RegistrationPpdbAchievement;
use App\Models\RegistrationPpdbScholarship;
use App\Models\Student;
use App\Models\User;

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

    public function store(Request $request)
    {
        $admin_name = Auth::user()->fullname;
        $user_id = Auth::user()->id;


        try {
            DB::beginTransaction();

            $user = User::create([
                'fullname' => $request->fullname,
                'email' => $request->email,
                'password' => $request->password
            ]);

            $payment_registration = PaymentRegistration::create([
                'fullname' => $request->fullname,
                'email' => $request->email,
                'password' => $request->password
            ]);

            $registration_ppdb = $this->table::create([
                'user_id' => $user_id,
                'payment_registration_id' => $payment_registration,
                'admin_name' => $admin_name,
                'type_registration' => $request->type_registration,
                'gender' => $request->gender,
                'from_school' => $request->from_school,
                'weigth' => $request->weight,
                'height' => $request->height,
                'special_needs' => $request->special_needs,
                'religion' => $request->religion,
                'birth_place' => $request->birth_place,
                'birth_date' => $request->birth_date,
                'address' => $request->address,

                'nisn' => $request->nisn,
                'nik' => $request->nik,
                'nisn_image' => $request->nisn_image,
                'kartu_keluarga_image' => $request->kartu_keluarga_image,
                'no_serial_skhus' => $request->no_serial_skhus,
                'no_serial_diploma' => $request->no_serial_diploma,
                'no_examinee' => $request->no_examinee,
                'competency_pick_1' => $request->competency_pick_1,
                'competency_pick_2' => $request->competency_pick_2,
                'competency_pick_3' => $request->competency_pick_3,
                'extracurricular_1' => $request->extracurricular_1,
                'extracurricular_2' => $request->extracurricular_2,
                'uniform_1' => $request->uniform_1,
                'uniform_2' => $request->uniform_2,
                'uniform_3' => $request->uniform_3,
                'uniform_4' => $request->uniform_4,

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


                'father_name' => $request->father_name,
                'father_nik' => $request->father_nik,
                'father_birth_place' => $request->father_birth_place,
                'father_birth_date' => $request->father_birth_date,
                'father_education' => $request->father_education,
                'father_job' => $request->father_job,
                'father_income' => $request->father_income,

                'mother_name' => $request->mother_name,
                'mother_nik' => $request->mother_nik,
                'mother_birth_place' => $request->mother_birth_place,
                'mother_birth_date' => $request->mother_birth_date,
                'mother_education' => $request->mother_education,
                'mother_job' => $request->mother_job,
                'mother_income' => $request->mother_income,

                'batch' => null,
                'status' => 2,
            ]);

            foreach ($request->scholarships as $scholarship) {
                RegistrationPpdbScholarship::create([
                    'registration_ppdb_id' => $registration_ppdb->id,
                    'type' => $scholarship['type_scholarship'],
                    'year_start' => $scholarship['year_start'],
                    'year_finish' => $scholarship['year_finish'],
                    'description' => $scholarship['description'],
                ]);
            }

            foreach ($request->achievements as $achievement) {
                RegistrationPpdbAchievement::create([
                    'registration_ppdb_id' => $registration_ppdb->id,
                    'type' => $achievement['type'],
                    'name' => $achievement['name'],
                    'year' => $achievement['year'],
                    'level' => $achievement['level'],
                    'organizer' => $achievement['organizer'],
                ]);
            }

            DB::commit();
        } catch(QueryException $e) {
            DB::rollBack();
        }
    }
}
