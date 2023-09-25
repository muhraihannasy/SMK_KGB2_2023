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

        $user = User::where('email', request('email'))->with(['detail_user'])->get()->first();

        if($user->detail_user->role_id === 4) {
            $registraiton = RegistrationPPDB::where('user_id', $user->id)->get(['id', 'uuid', 'payment_registration_id', 'code_registration'])->first();
            $payment_registration = PaymentRegistration::find($registraiton->payment_registration_id);
            $payment_status = $payment_registration->status;

            // 1 = "Not Pay"
            // 2 = "Process Pay"
            // 3 = "Payment Success"
            $response = [
                1 => [
                    'registration_uuid' => $registraiton->uuid,
                    'code_registration' => $registraiton->code_registration,
                    'status_payment' => $payment_status
                ],
                2 => [
                    'payment_uuid' => $payment_registration->uuid,
                    'status_payment' => $payment_status
                ],
            ];

            if($payment_status === "3") {
                return $this->respondWithToken($token);
            }

            return $this->successReponse($response[$payment_status],  200);
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
                'role_id' => 4,
                'phone' =>  $request->phone,
            ]);

            $payment_registration = PaymentRegistration::create([
                'payment_amount' => '150000',
                'status' => 1,
            ]);

            $registration = RegistrationPPDB::create([
                'user_id' => $user->id,
                'payment_registration_id' => $payment_registration->id,
                'competency_pick_1' => $request->competency_pick_1,
                'competency_pick_2' => $request->competency_pick_2,
                'competency_pick_3' => $request->competency_pick_3,
                'from_school' => $request->from_school
            ]);



            DB::commit();
        } catch(Exception $e) {
            DB::rollBack();
            return $this->errorResponse($e->getMessage(), 400);
        }

        return $this->successReponse(true, 200);
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
