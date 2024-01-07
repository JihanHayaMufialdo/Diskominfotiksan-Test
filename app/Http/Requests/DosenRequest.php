<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DosenRequest extends FormRequest
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
        $dosen = $this->route('dosen');

        return [
            'nip'           => ['required','string',Rule::unique('dosen', 'nip')->ignore(optional($dosen)->id)],
            'nama'          => 'required|string',
            'kode_prodi'    => 'required'
        ];

    }

    public function messages()
    {
        return [
            'nip.unique'            => 'NIP sudah terdaftar',
            'nip.required'          => 'NIP harus diisi',
            'nama.required'         => 'Nama harus diisi',
            'kode_prodi.required'   => 'Prodi harus diisi'
        ];
    }
}
