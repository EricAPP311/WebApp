<?php

namespace App\Imports;

use App\Models\Reservation;
use DateTime;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ReservationImport implements ToCollection, WithHeadingRow, WithValidation
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collections)
    {
        foreach ($collections as $collection) {

            $registration_date = $collection['registration_date'] !== null || $collection['registration_date'] !== '-' ? DateTime::createFromFormat('d/m/Y', $collection['registration_date'])->format('Y-m-d H:i:s') : null;
            $birthdate = $collection['birthdate'] !== null || $collection['birthdate'] !== '-' ? DateTime::createFromFormat('d/m/Y', $collection['birthdate'])->format('Y-m-d') : null;
            $updated_at = $collection['updated_at'] !== null || $collection['updated_at'] !== '-' ? DateTime::createFromFormat('d/m/Y H:i', $collection['updated_at'])->format('Y-m-d H:i:s') : null;
            $created_at = $collection['created_by'] !== null || $collection['created_by'] !== '-' ? DateTime::createFromFormat('d/m/Y H:i', $collection['created_by'])->format('Y-m-d H:i:s') : null;

            Reservation::create([
                "first_name" => $collection['first_name'],
                "last_name" => $collection['last_name'],
                "civility" => $collection['civility'],
                "email" => $collection['email'],
                "phone" => $collection['phone'],
                "registration_date" => $registration_date,
                "birthdate" => $birthdate,
                "has_no_show" => $collection['has_no_show'],
                "is_blacklisted" => $collection['is_blacklisted'],
                "allergies_notes" => $collection['allergies_notes'],
                "guest_notes" => $collection['guest_notes'],
                "bookings_number_la_montagne" => $collection['bookings_number_la_montagne'],
                "created_at" => $created_at,
                "updated_at" => $updated_at,
            ]);
        }
    }

    public function rules(): array
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ];
    }
}
