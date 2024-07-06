<div class="row mt-3">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header pb-0">
                <h6 class="text-capitalize">Formulaire de réservation</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('landing.reservation-store') }}" method="POST" class="p-2">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 me-md-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="first_name">Prenom</label>
                                                <input type="text" name="first_name"
                                                    class="form-control @error('first_name') is-invalid @enderror"
                                                    placeholder="Entrez ici votre prénom."
                                                    value="{{ old('first_name') }}">
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
                                            <div class="form-group mb-3">
                                                <label for="last_name">Nom</label>
                                                <input type="text" name="last_name"
                                                    class="form-control @error('last_name') is-invalid @enderror"
                                                    placeholder="Entrez le nom de famille ici."
                                                    value="{{ old('last_name') }}">
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
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Entrez l'e-mail ici." value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            <small>
                                                {{ $message }}
                                            </small>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Numéro de téléphone</label>
                                <input type="tel" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="Entrez le numéro de téléphone ici." value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="invalid-feedback">
                                        <small>
                                            {{ $message }}
                                        </small>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="birthdate">Date d'anniversaire</label>
                                <input type="text" name="birthdate" id="birthdate"
                                    class="form-control datepicker @error('birthdate') is-invalid @enderror"
                                    placeholder="dd-MM-yyyy" value="{{ old('birthdate') }}" style="text-align:left">
                                @error('birthdate')
                                    <div class="invalid-feedback">
                                        <small>
                                            {{ $message }}
                                        </small>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="registration_date">Jour de réservation</label>
                                <input type="text" name="registration_date" id="registration_date"
                                    class="form-control datetimepicker @error('registration_date') is-invalid @enderror"
                                    placeholder="dd-MM-yyyy HH:mm:ss" value="{{ old('registration_date') }}"
                                    style="text-align:left">
                                @error('registration_date')
                                    <div class="invalid-feedback">
                                        <small>
                                            {{ $message }}
                                        </small>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="bookings_number_la_montagne">Nombre de personnes
                                </label>
                                <input type="number" name="bookings_number_la_montagne"
                                    class="form-control @error('bookings_number_la_montagne') is-invalid @enderror"
                                    placeholder="Entrez ici le nombre de personnes"
                                    value="{{ old('bookings_number_la_montagne') }}">
                                @error('bookings_number_la_montagne')
                                    <div class="invalid-feedback">
                                        <small>
                                            {{ $message }}
                                        </small>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="reservation_type">Type de réservation</label>
                                <select name="reservation_type" id="reservation_type"
                                    class="form-control @error('reservation_type') is-invalid @enderror">
                                    <option value="" {{ old('reservation_type') == null ? 'selected' : '' }}>
                                        Sélectionnez-en un</option>
                                    <option value="Phone" {{ old('reservation_type') == 'Phone' ? 'selected' : '' }}>
                                        Phone</option>
                                    <option value="Website"
                                        {{ old('reservation_type') == 'Website' ? 'selected' : '' }}>
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
                            <div class="form-group mb-3">
                                <label for="exampleFormControlTextarea1">Notes de réservation</label>
                                <textarea name="notes" id="exampleFormControlTextarea1" class="form-control @error('notes') is-invalid @enderror"
                                    rows="3" placeholder="Entrez des notes ici." style="text-align:left">
                                    {{ old('notes') }}
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
                    {{-- <div class="form-group mt-3">
                        <div class="col-md-8">
                            <div class="captcha mb-2">
                                <span>{!! captcha_img('flat') !!}</span>
                                <button type="button" class="btn btn-danger" class="reload" id="reload">
                                    &#x21bb;
                                </button>
                            </div>
                            <input type="text" name="captcha" id="captcha"
                                class="form-control @error('captcha') is-invalid @enderror"
                                placeholder="Entrez le captcha ici">
                            @error('captcha')
                                <div class="invalid-feedback">
                                    <small>
                                        {{ $message }}
                                    </small>
                                </div>
                            @enderror
                        </div>
                    </div> --}}
                    <div class="form-group mt-3">
                        <div class="d-flex">
                            <button class="btn btn-secondary btn-sm ms-auto me-2"
                                type="reset">Réinitialiser</button>
                            <button class="btn btn-primary btn-sm" type="submit">Soumettre</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
