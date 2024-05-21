<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class ReservationRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'registration_date' => 'required',
            'birthdate' => 'required',
            'bookings_number_la_montagne' => 'required',
            'reservation_type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Le champ prénom est obligatoire.',
            'last_name.required' => 'Le champ Nom de famille est obligatoire.',
            'email.required' => 'Le champ email est obligatoire.',
            'email.email' => 'Le champ email doit être une adresse email valide.',
            'phone.required' => 'Le champ téléphone est obligatoire.',
            'registration_date.required' => 'Le champ date d’inscription est obligatoire.',
            'birthdate.required' => 'Le champ anniversaire est obligatoire.',
            'bookings_number_la_montagne.required' => 'Le champ nombre de personnes est obligatoire.',
            'reservation_type.required' => 'Le champ type de réservation est obligatoire.',
        ];
    }

    public function withValidator(Validator $validator)
    {
        if ($validator->fails()) {
            alert()->error('Error', "Les données n'ont pas été renseignées correctement.");
        }
    }
}
