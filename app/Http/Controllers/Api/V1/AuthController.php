<?php

namespace App\Http\Controllers\Api\V1;

// Controller
use App\Http\Controllers\Controller;

// Traits
use App\Traits\HttpResponseTrait;

// Request
use App\Http\Requests\RegisterRequest;

// Iluminate
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

// Model
use App\Models\User;
use App\Models\Role;
use App\Models\DetailUser;
use App\Models\PaymentRegistration;
use App\Models\RegistrationPPDB;

use Exception;

class AuthController extends Controller
{
    use HttpResponseTrait;

    public function __construct()
    {
        $this->middleware('isLoginWithApi', ['except' => ['login', 'register']]);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function register(RegisterRequest $request)
    {
        try {
            DB::beginTransaction();

            $user = User::create([
                'fullname' => $request->fullname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $detail_user = DetailUser::create([
                'user_id' => $user->id,
                'role_id' => 3,
                'phone' =>  $request->phone,
            ]);

            $registration = RegistrationPPDB::create([
                'user_id' => $user->id,
                'competency_pick_1' => $request->competency_pick_1,
                'competency_pick_2' => $request->competency_pick_2,
                'competency_pick_3' => $request->competency_pick_3,
                'from_school' => $request->from_school
            ]);

            $payment_registration = PaymentRegistration::create([
                'registration_ppdb_id' => $registration->id,
                'payment_amount' => '150000',
                'status' => 1,
            ]);

            DB::commit();
        } catch(Exception $e) {
            DB::rollBack();
            return $this->errorResponse($e->getMessage(), 400);
        }

        return $this->successReponse(null, 200);
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
         $userIsLogin = Auth::user();
         $userIsLogin->load('detail_user');
         $role = Role::find($userIsLogin->detail_user->role_id);



        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::factory()->getTTL() * 60,
            "user" => [
                'fullname' => $userIsLogin->fullname,
                'email' => $userIsLogin->email,
                'photo' => $userIsLogin->detail_user->photo,
                'role' => [
                    'name' => $role->name,
                    'menu_permission' => $role->menu_permission
                ]
            ],
        ]);
    }
}
