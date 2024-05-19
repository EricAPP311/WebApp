<x-layouts.app bodyClass="g-sidenav-show bg-gray-100" title="{{ $title }}">
    <x-layouts.navbars.sidebar activePage="reservation"></x-layouts.navbars.sidebar>
    <main class="main-content position-relative border-radius-lg ">
        <x-layouts.navbars.navbar titlePage="{{ $title }}"></x-layouts.navbars.navbar>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Form {{ $title }}</h6>
                        </div>
                        <div class="card-body">
                            <form
                                action="{{ isset($reservation) ? route('reservation.update', $reservation->id) : route('reservation.store') }}"
                                method="post" class="p-2">
                                @csrf
                                @isset($reservation)
                                    @method('PATCH')
                                @endisset
                                <div class="row">
                                    <div class="col-md-6 me-md-3">
                                        <div class="row mb-3">
                                            <label for="first_name">First Name</label>
                                            <input type="text" name="first_name"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                placeholder="Enter first name here."
                                                value="{{ $reservation->first_name ?? '' }}">
                                            @error('first_name')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" name="last_name"
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                placeholder="Enter last name here."
                                                value="{{ $reservation->last_name ?? '' }}">
                                            @error('last_name')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="civility">Civility</label>
                                            <input type="text" name="civility"
                                                class="form-control @error('civility') is-invalid @enderror"
                                                placeholder="Enter civility here."
                                                value="{{ $reservation->civility ?? '' }}">
                                            @error('civility')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email">Email</label>
                                            <input type="text" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Enter email here."
                                                value="{{ $reservation->email ?? '' }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                placeholder="Enter number phone here."
                                                value="{{ $reservation->phone ?? '' }}">
                                            @error('phone')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="country">Country</label>
                                            <input type="text" name="country"
                                                class="form-control @error('country') is-invalid @enderror"
                                                placeholder="Enter name or code of country here."
                                                value="{{ $reservation->country ?? '' }}">
                                            @error('country')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="guest_status">Guest Status</label>
                                            <input type="text" name="guest_status"
                                                class="form-control @error('guest_status') is-invalid @enderror"
                                                placeholder="Enter guest status here."
                                                value="{{ $reservation->guest_status ?? '' }}">
                                            @error('guest_status')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email_optin_market">Email Optin Market</label>
                                            <textarea name="email_optin_market" class="form-control @error('email_optin_market') is-invalid @enderror"
                                                cols="30" rows="3" placeholder="Enter email optin market here.">
                                                {{ $reservation->email_optin_market ?? '' }}
                                            </textarea>
                                            @error('email_optin_market')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="registration_date_optin_mail">Registration Date Optin
                                                Mail</label>
                                            <input type="date" name="registration_date_optin_mail"
                                                class="form-control @error('registration_date_optin_mail') is-invalid @enderror"
                                                placeholder="Enter registration date optin mail here."
                                                value="{{ $reservation->registration_date_optin_mail ?? '' }}">
                                            @error('registration_date_optin_mail')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="sms_optin_market">Sms Optin Market</label>
                                            <textarea name="sms_optin_market" class="form-control @error('sms_optin_market') is-invalid @enderror" cols="30"
                                                rows="3" placeholder="Enter sms optin market here.">
                                                {{ $reservation->sms_optin_market ?? '' }}
                                            </textarea>
                                            @error('sms_optin_market')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="registration_date_optin_sms">Registration Date Optin
                                                Sms</label>
                                            <input type="date" name="registration_date_optin_sms"
                                                class="form-control @error('registration_date_optin_sms') is-invalid @enderror"
                                                placeholder="Enter registration date optin sms here."
                                                value="{{ $reservation->registration_date_optin_sms ?? '' }}">
                                            @error('registration_date_optin_sms')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="mail_optin_review">Mail Optin Review</label>
                                            <textarea name="mail_optin_review" class="form-control @error('mail_optin_review') is-invalid @enderror"
                                                cols="30" rows="3" placeholder="Enter mail optin review here.">
                                                {{ $reservation->mail_optin_review ?? '' }}
                                            </textarea>
                                            @error('mail_optin_review')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="registration_date_optin_review_mail">Registration Date Optin
                                                Review Mail</label>
                                            <input type="date" name="registration_date_optin_review_mail"
                                                class="form-control @error('registration_date_optin_review_mail') is-invalid @enderror"
                                                placeholder="Enter registration date optin review mail here."
                                                value="{{ $reservation->registration_date_optin_review_mail ?? '' }}">
                                            @error('registration_date_optin_review_mail')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="sms_optin_review">Sms Optin Review</label>
                                            <textarea name="sms_optin_review" class="form-control @error('sms_optin_review') is-invalid @enderror"
                                                cols="30" rows="3" placeholder="Enter sms optin review here.">
                                            {{ $reservation->sms_optin_review ?? '' }}
                                        </textarea>
                                            @error('sms_optin_review')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="registration_date_optin_review_sms">Registration Date Optin
                                                Review Sms</label>
                                            <input type="date" name="registration_date_optin_review_sms"
                                                class="form-control @error('registration_date_optin_review_sms') is-invalid @enderror"
                                                placeholder="Enter registration date optin review sms here."
                                                value="{{ $reservation->registration_date_optin_review_sms ?? '' }}">
                                            @error('registration_date_optin_review_sms')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="row mb-3">
                                            <label for="company">Company</label>
                                            <input type="text" name="company"
                                                class="form-control @error('company') is-invalid @enderror"
                                                placeholder="Enter company name here."
                                                value="{{ $reservation->company ?? '' }}">
                                            @error('company')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="professional_email">Professional Email</label>
                                            <input type="text" name="professional_email"
                                                class="form-control @error('professional_email') is-invalid @enderror"
                                                placeholder="Enter professional email here."
                                                value="{{ $reservation->professional_email ?? '' }}">
                                            @error('professional_email')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="professional_phone">Professional Phone</label>
                                            <input type="text" name="professional_phone"
                                                class="form-control @error('professional_phone') is-invalid @enderror"
                                                placeholder="Enter professional phone here."
                                                value="{{ $reservation->professional_phone ?? '' }}">
                                            @error('professional_phone')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="birthdate">Birthdate</label>
                                            <input type="date" name="birthdate"
                                                class="form-control @error('birthdate') is-invalid @enderror"
                                                placeholder="Enter birthdate here."
                                                value="{{ $reservation->birthdate ?? '' }}">
                                            @error('birthdate')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="address">Address</label>
                                            <textarea name="address" class="form-control @error('address') is-invalid @enderror" cols="30" rows="3"
                                                placeholder="Enter address here.">
                                                {{ $reservation->address ?? '' }}
                                            </textarea>
                                            @error('address')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="city">City</label>
                                            <input type="text" name="city"
                                                class="form-control @error('city') is-invalid @enderror"
                                                placeholder="Enter name or code of city here."
                                                value="{{ $reservation->city ?? '' }}">
                                            @error('city')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="zip">Zip</label>
                                            <input type="text" name="zip"
                                                class="form-control @error('zip') is-invalid @enderror"
                                                placeholder="Enter zip code here."
                                                value="{{ $reservation->zip ?? '' }}">
                                            @error('zip')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="lang">Lang</label>
                                            <input type="text" name="lang"
                                                class="form-control @error('lang') is-invalid @enderror"
                                                placeholder="Enter lang here."
                                                value="{{ $reservation->lang ?? '' }}">
                                            @error('lang')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="has_no_show">Has no show</label>
                                            <input type="text" name="has_no_show"
                                                class="form-control @error('has_no_show') is-invalid @enderror"
                                                placeholder="Enter has no show here."
                                                value="{{ $reservation->has_no_show ?? '' }}">
                                            @error('has_no_show')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="is_blacklisted">Is Blacklisted</label>
                                            <input type="text" name="is_blacklisted"
                                                class="form-control @error('is_blacklisted') is-invalid @enderror"
                                                placeholder="Enter is blacklisted here."
                                                value="{{ $reservation->is_blacklisted ?? '' }}">
                                            @error('is_blacklisted')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="allergies_notes">Allergies Notes</label>
                                            <textarea name="allergies_notes" class="form-control @error('allergies_notes') is-invalid @enderror" cols="30"
                                                rows="3" placeholder="Enter allergies notes here.">
                                                {{ $reservation->allergies_notes ?? '' }}
                                            </textarea>
                                            @error('allergies_notes')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="allergies_tags">Allergies Tags</label>
                                            <input type="text" name="allergies_tags"
                                                class="form-control @error('allergies_tags') is-invalid @enderror"
                                                placeholder="Enter allergies tags here."
                                                value="{{ $reservation->allergies_tags ?? '' }}">
                                            @error('allergies_tags')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="guest_notes">Guest Notes</label>
                                            <textarea name="guest_notes" class="form-control @error('guest_notes') is-invalid @enderror" cols="30"
                                                rows="3" placeholder="Enter guest notes here.">
                                                {{ $reservation->guest_notes ?? '' }}
                                            </textarea>
                                            @error('guest_notes')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="guest_tags">Guest Tags</label>
                                            <input type="text" name="guest_tags"
                                                class="form-control @error('guest_tags') is-invalid @enderror"
                                                placeholder="Enter guest tags here."
                                                value="{{ $reservation->guest_tags ?? '' }}">
                                            @error('guest_tags')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="bookings_number_la_montagne">Bookings Number La Montagne
                                            </label>
                                            <input type="date" name="bookings_number_la_montagne"
                                                class="form-control @error('bookings_number_la_montagne') is-invalid @enderror"
                                                placeholder="Enter bookings number la montagne here."
                                                value="{{ $reservation->bookings_number_la_montagne ?? '' }}">
                                            @error('bookings_number_la_montagne')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="d-flex">
                                        <a href="{{ route('reservation.index') }}" type="button"
                                            class="btn btn-secondary btn-sm ms-auto me-2">Cancel</a>
                                        <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <x-layouts.footer></x-layouts.footer> --}}
        </div>
    </main>
    <x-layouts.plugin title="{{ strtolower($title) }}"></x-layouts.plugin>

</x-layouts.app>
