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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-5 me-md-4">
                                                        <div class="row mb-3">
                                                            <label for="first_name">First Name</label>
                                                            <input type="text" name="first_name"
                                                                class="form-control @error('first_name') is-invalid @enderror"
                                                                placeholder="Entrez ici votre prénom."
                                                                value="{{ $reservation->first_name ?? '' }}">
                                                            @error('first_name')
                                                                <div class="invalid-feedback">
                                                                    <small>
                                                                        {{ $message }}
                                                                    </small>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="last_name">Last Name</label>
                                                            <input type="text" name="last_name"
                                                                class="form-control @error('last_name') is-invalid @enderror"
                                                                placeholder="Entrez le nom de famille ici."
                                                                value="{{ $reservation->last_name ?? '' }}">
                                                            @error('last_name')
                                                                <div class="invalid-feedback">
                                                                    <small>
                                                                        {{ $message }}
                                                                    </small>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email">Email</label>
                                            <input type="text" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Entrez l'e-mail ici."
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
                                            <label for="phone">Numéro de téléphone</label>
                                            <input type="tel" name="phone"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                placeholder="Entrez le numéro de téléphone ici."
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
                                            <label for="registration_date">Jour de réservation</label>
                                            <input type="date" name="registration_date"
                                                class="form-control @error('registration_date') is-invalid @enderror"
                                                placeholder="Entrez la date d'inscription ici"
                                                value="{{ $reservation->registration_date ?? '' }}">
                                            @error('registration_date')
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
                                            <label for="birthdate">Date d'anniversaire</label>
                                            <input type="date" name="birthdate"
                                                class="form-control @error('birthdate') is-invalid @enderror"
                                                placeholder="Entrez l'anniversaire ici."
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
                                            <label for="bookings_number_la_montagne">Nombre de personnes
                                            </label>
                                            <input type="number" name="bookings_number_la_montagne"
                                                class="form-control @error('bookings_number_la_montagne') is-invalid @enderror"
                                                placeholder="Entrez ici le nombre de personnes"
                                                value="{{ $reservation->bookings_number_la_montagne ?? '' }}">
                                            @error('bookings_number_la_montagne')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="reservation_type">Reservation Type</label>
                                            <select name="reservation_type" id="reservation_type"
                                                class="form-control @error('reservation_type') is-invalid @enderror">
                                                @if (empty($reservation))
                                                    <option value="" selected>Sélectionnez-en un</option>
                                                @elseif (isset($reservation))
                                                    @if ($reservation->reservation_type === null)
                                                        <option value="" selected>Sélectionnez-en un</option>
                                                    @endif
                                                @endif
                                                <option value="Phone"
                                                    {{ isset($reservation) ? ($reservation->reservation_type === 'Phone' ? 'selected' : '') : '' }}>
                                                    Phone</option>
                                                <option value="Website"
                                                    {{ isset($reservation) ? ($reservation->reservation_type === 'Website' ? 'selected' : '') : '' }}>
                                                    Website</option>
                                            </select>
                                            @error('reservation_type')
                                                <div class="invalid-feedback">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label for="notes">Notes</label>
                                            <textarea name="notes" class="form-control @error('notes') is-invalid @enderror" cols="30" rows="3"
                                                placeholder="Entrez des notes ici.">
                                                {{ $reservation->notes ?? '' }}
                                            </textarea>
                                            @error('notes')
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
                                            class="btn btn-secondary btn-sm ms-auto me-2">Annuler</a>
                                        <button class="btn btn-primary btn-sm" type="submit">Soumettre</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-layouts.plugin title="{{ strtolower($title) }}"></x-layouts.plugin>

</x-layouts.app>
