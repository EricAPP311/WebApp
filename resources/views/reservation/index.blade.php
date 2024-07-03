<x-layouts.app bodyClass="g-sidenav-show bg-gray-100" title="Reservation">
    @push('styles')
        <link href="{{ asset('assets/vendor/datatable/datatables.min.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @endpush
    <x-layouts.navbars.sidebar activePage="reservation"></x-layouts.navbars.sidebar>
    <main class="main-content position-relative border-radius-lg ">
        <x-layouts.navbars.navbar titlePage="Reservation"></x-layouts.navbars.navbar>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Reservation Table</h6>
                            <div class="row mb-2 p-1">
                                <div class="d-flex">
                                    <a type="button" href="{{ route('reservation.create') }}"
                                        class="btn btn-primary btn-sm ms-auto me-2"><i class="fa fa-plus"></i>
                                        Create</a>
                                    <a type="button" href="{{ route('reservation.upload') }}"
                                        class="btn btn-success btn-sm"><i class="fa fa-upload"></i> Upload File</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="table-responsive p-2">
                                    <table class="table table-condensed" id="reservation-table">
                                        <thead class="table-success" style="color: #dde1e9;">
                                            <tr>
                                                <th
                                                    class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                                    Nom</th>
                                                <th
                                                    class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Reservation ID</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                                    Jour de réservation</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                                    Numéro de téléphone</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                                    Nombre de personnes</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                                    Reservation Type</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                                    date d'anniversaire</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                                    Notes</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($reservations as $reservation)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">
                                                                    {{ $reservation->first_name . ' ' . $reservation->last_name }}
                                                                </h6>
                                                                <p class="text-xs text-dark mb-0">
                                                                    {{ $reservation->email }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span
                                                            class="text-dark text-xs font-weight-bold">{{ $reservation->id }}
                                                        </span>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span
                                                            class="text-dark text-xs font-weight-bold">{{ date('d M Y H:i:s', strtotime($reservation->registration_date)) }}
                                                        </span>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span
                                                            class="text-dark text-xs font-weight-bold">{{ $reservation->phone }}
                                                        </span>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span
                                                            class="text-dark text-xs font-weight-bold">{{ $reservation->bookings_number_la_montagne }}
                                                        </span>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span
                                                            class="text-dark text-xs font-weight-bold">{{ $reservation->reservation_type }}</span>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span
                                                            class="text-dark text-xs font-weight-bold">{{ date('d M Y', strtotime($reservation->birthdate)) }}</span>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span
                                                            class="text-dark text-xs font-weight-bold">{{ $reservation->notes }}</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex justify-content-center gap-2 button-group">
                                                            <a href="{{ route('reservation.edit', $reservation->id) }}"
                                                                type="button"
                                                                class="btn btn-primary shadow btn-xs sharp me-1 text-xs"
                                                                data-toggle="tooltip" data-original-title="Edit User">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <form
                                                                action="{{ route('reservation.destroy', $reservation->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-warning shadow btn-xs sharp me-1"
                                                                    data-toggle="tooltip"
                                                                    data-original-title="Delete User">
                                                                    <i class="fa fa-trash"></i>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <x-layouts.footer></x-layouts.footer> --}}
        </div>
    </main>
    <x-layouts.plugin title="reservation"></x-layouts.plugin>
    @push('script')
        <script src="{{ asset('assets/vendor/datatable/datatables.min.js') }}"></script>
        <script>
            new DataTable('#reservation-table');
        </script>
    @endpush
</x-layouts.app>
