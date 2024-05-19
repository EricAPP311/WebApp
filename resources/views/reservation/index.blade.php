<x-layouts.app bodyClass="g-sidenav-show bg-gray-100" title="Reservation">
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
                                        class="btn btn-primary btn-sm ms-auto me-2">Create Data</a>
                                    <a type="button" href="{{ route('reservation.upload') }}"
                                        class="btn btn-success btn-sm">Import Excel</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Name</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Reservation ID</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Reservation Day</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Phone Number</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                number of persons</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Reservation Type</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Birthday</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Notes</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($reservations as $reservation)
                                            <tr>
                                                <td>{{ $reservation->first_name . ' ' . $reservation->last_name }}</td>
                                                <td>{{ $reservation->id }}</td>
                                                <td>{{ $reservation->created_at }}</td>
                                                <td>{{ $reservation->phone }}</td>
                                                <td>{{ $reservation->bookings_number_la_montagne }}</td>
                                                <td>Phone</td>
                                                <td>{{ $reservation->guest_notes }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="9">
                                                    <div style="text-align: center">
                                                        <small>Data is empty.</small>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <x-layouts.footer></x-layouts.footer> --}}
        </div>
    </main>
    <x-layouts.plugin title="reservation"></x-layouts.plugin>

</x-layouts.app>
