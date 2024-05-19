<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('civility')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('guest_status')->nullable();
            $table->text('email_optin_market')->nullable();
            $table->date('registration_date_optin_mail')->nullable();
            $table->text('sms_optin_market')->nullable();
            $table->date('registration_date_optin_sms')->nullable();
            $table->text('mail_optin_review')->nullable();
            $table->date('registration_date_optin_review_mail')->nullable();
            $table->text('sms_optin_review')->nullable();
            $table->date('registration_date_optin_review_sms')->nullable();
            $table->string('company')->nullable();
            $table->string('professional_email')->nullable();
            $table->string('professional_phone')->nullable();
            $table->date('birthdate')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('lang')->nullable();
            $table->string('has_no_show')->nullable();
            $table->string('is_blacklisted')->nullable();
            $table->text('allergies_notes')->nullable();
            $table->string('allergies_tags')->nullable();
            $table->text('guest_notes')->nullable();
            $table->string('guest_tags')->nullable();
            $table->string('bookings_number_la_montagne')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
