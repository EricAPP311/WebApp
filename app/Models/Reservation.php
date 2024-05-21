<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'civility',
        'email',
        'phone',
        'country',
        'guest_status',
        'registration_date',
        'email_optin_market',
        'registration_date_optin_mail',
        'sms_optin_market',
        'registration_date_optin_sms',
        'mail_optin_review',
        'registration_date_optin_review_mail',
        'sms_optin_review',
        'registration_date_optin_review_sms',
        'company',
        'professional_email',
        'professional_phone',
        'birthdate',
        'address',
        'city',
        'zip',
        'lang',
        'has_no_show',
        'is_blacklisted',
        'reservation_type',
        'allergies_notes',
        'allergies_tags',
        'guest_notes',
        'guest_tags',
        'notes',
        'bookings_number_la_montagne',
        'created_at',
        'updated_at'
    ];
}
