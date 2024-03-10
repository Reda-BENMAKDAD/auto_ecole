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
        'num_cin' => ['required', 'string', 'max:255'],
        'nom' => ['required', 'string', 'max:255'],
        'prenom' => ['required', 'string', 'max:255'],
        'date_naiss' => ['required', 'date'],
        'lieu_naiss' => ['required', 'string', 'max:255'],
        'adresse' => ['required', 'string',],
        'nationalite' => ['required', 'string', 'max:255'],
        'num_tel' => ['required', 'string',],
        'email' => ['required', 'email', 'max:255'],
        'sexe' => ['required', 'string', 'max:1', 'in:H,F'],
        'salaire' => ['numeric', 'required'],
        'poste' => ['required', 'numeric'],
        'scan_cv' => ['nullable', 'file', 'mimes:pdf,doc,docx,odt,txt,png,jpg,jpeg'],
        'scan_cin' => ['nullable', 'file', 'mimes:pdf,doc,docx,odt,png,jpg,jpeg'],
        'photo' => ['nullable', 'file', 'mimes:jpg,jpeg,webp,gif,png'],
        'password' => ['required', 'string', 'min:8'],
        'ConfirmPassword' => ['required', 'string', 'min:8', 'same:password']
        ];
    }

    public function messages() {
        return [
            'num_cin.required' => 'Le champ Numéro CIN est obligatoire',
            'nom.required' => 'Le champ Nom est obligatoire',
            'prenom.required' => 'Le champ Prénom est obligatoire',
            'date_naiss.required' => 'Le champ Date de naissance est obligatoire',
            'lieu_naiss.required' => 'Le champ Lieu de naissance est obligatoire',
            'adresse.required' => 'Le champ Adresse est obligatoire',
            'nationalite.required' => 'Le champ Nationalité est obligatoire',
            'num_tel.required' => 'Le champ Numéro de téléphone est obligatoire',
            'email.required' => 'Le champ Email est obligatoire',
            'sexe.required' => 'Le champ Sexe est obligatoire',
            'salaire.required' => 'Le champ Salaire est obligatoire',
            'poste.required' => 'Le champ Poste est obligatoire',
            'password.required' => 'Le champ Mot de passe est obligatoire',
            'ConfirmPassword.required' => 'Le champ Confirmation du mot de passe est obligatoire',
            'num_cin.string' => 'Le champ Numéro CIN doit être une chaîne de caractères',
            'nom.string' => 'Le champ Nom doit être une chaîne de caractères',
            'prenom.string' => 'Le champ Prénom doit être une chaîne de caractères',
            'date_naiss.date' => 'Le champ Date de naissance doit être une date',
            'lieu_naiss.string' => 'Le champ Lieu de naissance doit être une chaîne de caractères',
            'adresse.string' => 'Le champ Adresse doit être une chaîne de caractères',
            'nationalite.string' => 'Le champ Nationalité doit être une chaîne de caractères',
            'num_tel.string' => 'Le champ Numéro de téléphone doit être une chaîne de caractères',
            'email.email' => 'Le champ Email doit être une adresse email valide',
            'sexe.string' => 'Le champ Sexe doit être une chaîne de caractères',
            'salaire.regex' => 'Le champ Salaire doit être une chaîne de caractères',
            'password.string' => 'Le champ Mot de passe doit être une chaîne de caractères',
            'ConfirmPassword.string' => 'Le champ Confirmation du mot de passe doit être une chaîne de caractères',
            'password.min' => 'Le champ Mot de passe doit contenir au moins 8 caractères',
            'ConfirmPassword.min' => 'Le champ Confirmation du mot de passe doit contenir au moins 8 caractères',
            'password.confirmed' => 'Le champ Mot de passe et Confirmation du mot de passe doivent être identiques',
            'ConfirmPassword.same' => 'Le champ Mot de passe et Confirmation du mot de passe doivent être identiques',
            'scan_cv.file' => 'Le champ CV doit être un fichier',
            'scan_cin.file' => 'Le champ CIN doit être un fichier',
            'photo.file' => 'Le champ Photo doit être un fichier',
            'scan_cv.mimes' => 'Le champ CV doit être un fichier de type pdf, doc, docx, odt, txt, png, jpg, jpeg',
            'scan_cin.mimes' => 'Le champ CIN doit être un fichier de type pdf, doc, docx, odt, txt, png, jpg, jpeg',
            'photo.mimes' => 'Le champ Photo doit être un fichier de type jpg, jpeg, webp, gif, png',

        ];
    }
}
