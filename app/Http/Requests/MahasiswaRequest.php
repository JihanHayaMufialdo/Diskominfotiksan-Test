<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MahasiswaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        $mahasiswa = $this->route('mahasiswa');

        return [
            'nim'           => ['required','string',Rule::unique('mahasiswa', 'nim')->ignore(optional($mahasiswa)->id)],
            'nama'          => 'required|string',
            'alamat'        => 'required|string',
            'kode_prodi'    => 'required'
        ];

    }

    public function messages()
    {
        return [
            'nim.unique'            => 'NIM sudah terdaftar',
            'nim.required'          => 'NIM harus diisi',
            'nama.required'         => 'Nama harus diisi',
            'alamat.required'       => 'Alamat harus diisi',
            'kode_prodi.required'   => 'Prodi harus diisi'
        ];
    }
}
