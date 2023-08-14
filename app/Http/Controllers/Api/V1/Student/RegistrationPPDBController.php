<?php

namespace App\Http\Controllers\Api\V1\Student;

// Illuminate
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


// Controller
use App\Http\Controllers\Controller;

// Models
use App\Models\RegistrationPPDB;

// Trait
use App\Traits\HttpResponseTrait;

// Request
use App\Http\Requests\RegistrationStudentPPDBUpdate;

class RegistrationPPDBController extends Controller
{
    use HttpResponseTrait;

    protected $table = RegistrationPPDB::class;

    public function index()
    {
        $registration = $this->table::where('user_id', $this->getUserIsLogin())
                        ->get()
                        ->first();

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


    public function update(RegistrationStudentPPDBUpdate $request)
    {
        try {
            DB::beginTransaction();

            $registration = $this->table::where('user_id', $this->getUserIsLogin());
            $registrationData = $request->all();

            // Bikin Table Gelombang, dan dapatkan value aktiv;
            $registrationData['batch'] = "";
            $registrationData['status'] = 2;

            $registration->update($registrationData);

            DB::commit();
        } catch(QueryException $e) {
            DB::rollBack();
            $this->errorResponse($e->getMessage(), 500);
        }

        return $this->successReponse(null, 200);
    }

    public function getUserIsLogin()
    {
        return Auth::user()->id;
    }
}
