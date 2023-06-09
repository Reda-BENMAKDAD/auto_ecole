<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
        'num_cin' => ['required', 'string', 'max:255'],
        'nom' => ['required', 'string', 'max:255'],
        'prenom' => ['required', 'string', 'max:255'],
        'date_naiss' => ['required', 'date'],
        'lieu_naiss' => ['required', 'string', 'max:255'],
        'addresse' => ['required', 'string',],
        'nationalite' => ['required', 'string', 'max:255'],
        'num_tel' => ['required', 'string',],
        'email' => ['required', 'email', 'max:255'],
        'sexe' => ['required', 'string', 'max:1', 'in:H,F'],
        'salaire' => ['required', 'regex:/^\d+(\.\d+)?dh$/']
        ];
    }
}
