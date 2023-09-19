<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePPDBAdmin extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
          'fullname' => "required|string",
          'email' => "required|string|unique:users,email",
          'password' => "required|string",
          'type_registration'=> "required|string",
          'from_school'=> "required|string",
          'gender'=> "required|string",
          'weight'=> "required|string",
          'height'=> "required|string",
          'special_needs'=> "required|string",
          'religion'=> "required|string",
          'birth_place'=> "required|string",
          'birth_date'=> "required|string",
          'address_combine'=> "required|string",
          'nisn' => "required|string",
          'nik' => "required|string",
          'nisn_image' => "required|string",
          'kartu_keluarga_image' => "required|string",
          'no_serial_skhus' => "required|string",
          'no_serial_diploma' => "required|string",
          'no_examinee' => "required|string",
          'competency_pick_1' => "required|string",
          'competency_pick_2' => "required|string",
          'competency_pick_3' => "required|string",
          'extracurricular_1' => "required|string",
          'extracurricular_2' => "required|string",
          'uniform_1' => "required|string",
          'uniform_2' => "required|string",
          'uniform_3' => "required|string",
          'uniform_4' => "required|string",
          'no_kks' => "string|nullable",
          'image_kks' => "string|nullable",
          'receiver_kps' => "string|nullable",
          'no_kps' => "string|nullable",
          'image_kps' => "string|nullable",
          'receiver_kip' => "string|nullable",
          'no_kip' => "string|nullable",
          'name_kip' => "string|nullable",
          'reason_kip' => "string|nullable",
          'image_kip' => "string|nullable",
          'father_name' => "required|string",
          'father_nik' => "required|string",
          'father_birth_place' => "required|string",
          'father_birth_date' => "required|string",
          'father_education' => "required|string",
          'father_job' => "required|string",
          'father_income' => "required|string",
          'mother_name' => "required|string",
          'mother_nik' => "required|string",
          'mother_birth_place' => "required|string",
          'mother_birth_date' => "required|string",
          'mother_education' => "required|string",
          'mother_job' => "required|string",
          'mother_income' => "required|string",
          'scholarships' => "array:type_scholarship,year_start,year_finish,description|nullable",
          'achievements' => "array:type,name,year,level,organizer|nullable",
        ];
    }
}
