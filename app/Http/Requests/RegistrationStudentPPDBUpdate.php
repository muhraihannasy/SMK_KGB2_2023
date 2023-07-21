<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationStudentPPDBUpdate extends FormRequest
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
            "weigth" => ['required','numeric'],
            "height" => ['required','numeric'],
            "amount_siblings" => ['required','numeric'],
            "gender" => ['required', 'in:Laki-Laki,Perempuan'],
            "special_needs" => ['required', 'string'],
            "order_family" => ['required','numeric'],
            "religion" => ['required', 'in:Islam,Kristen/Protestan,Khatolik,Hindu,Budha,Khonghucu'],
            "birth_place" => ['required', 'string'],
            "birth_date" => ['required', 'string'],
            "address" => ['required', 'string'],
            "extracurricular_1" => ['required', 'string'],
            "extracurricular_2" => ['required', 'string'],
            "uniform_1" => ['required', 'string'],
            "uniform_2" => ['required', 'string'],
            "uniform_3" => ['required', 'string'],
            "uniform_4" => ['required', 'string'],

            "nisn" => ['required', 'string'],
            "nisn_image" => ['required', 'string'],
            "kartu_keluarga_image" => ['required', 'string'],
            "no_serial_skhus" => ['required', 'string'],
            "no_serial_diploma" => ['required', 'string'],
            "no_examinee" => ['required', 'string'],

            "no_kks" => ['nullable', 'string'],
            "image_kks" => ['nullable', 'string'],
            "receiver_kps" => ['nullable', 'in:Ya,Tidak'],
            "no_kps" => ['nullable', 'string'],
            "image_kps" => ['nullable', 'string'],
            "receiver_kip" => ['nullable', 'in:Ya,Tidak'],
            "name_kip" => ['nullable', 'string'],
            "reason_kip" => ['nullable', 'string'],
            "image_kip" => ['nullable', 'string'],

            "father_name" => ['required', 'string'],
            "father_nik" => ['required', 'string'],
            "father_birth_place" => ['required', 'string'],
            "father_birth_date" => ['required', 'string'],
            "father_education" => ['required', 'string'],
            "father_job" => ['required', 'string'],
            "father_income" => ['required', 'string'],
            "mother_name" => ['required', 'string'],
            "mother_nik" => ['required', 'string'],
            "mother_birth_place" => ['required', 'string'],
            "mother_birth_date" => ['required', 'string'],
            "mother_education" => ['required', 'string'],
            "mother_job" => ['required', 'string'],
            "mother_income" => ['required', 'string'],
        ];
    }
}
