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
    protected $userIsLogin = Auth::user()->id;


    public function update(RegistrationStudentPPDBUpdate $request)
    {
        try {
            DB::beginTransaction();

            $registration = $this->table::find($this->userIsLogin);
            $registrationData = $request->all();

            // Bikin Table Gelombang, dan dapatkan value aktiv;
            $registrationData['batch'] = "";
            $registrationData['status'] = 1;

            $registration->update($registrationData);

            DB::commit();
        } catch(QueryException $e) {
            DB::rollBack();
            $this->errorResponse($e->getMessage(), 500);
        }

        return $this->successReponse($registration, 200);
    }
}
