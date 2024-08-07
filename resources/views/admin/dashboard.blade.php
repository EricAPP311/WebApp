<x-layouts.app bodyClass="g-sidenav-show bg-gray-100" title="Dashboard">
    @push('styles')
        <link href="{{ asset('assets/vendor/datatable/datatables.min.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @endpush
    <x-layouts.navbars.sidebar activePage="dashboard"></x-layouts.navbars.sidebar>
    <main class="main-content position-relative border-radius-lg ">
        <x-layouts.navbars.navbar titlePage="Dashboard"></x-layouts.navbars.navbar>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Clients by Phone</p>
                                        <h5 class="font-weight-bolder">
                                            {{ $data['byPhone'] }}
                                        </h5>
                                        <p class="mb-0">
                                            <span
                                                class="text-success text-sm font-weight-bolder">{{ $data['phoneLastWeek'] }}%</span>
                                            since last week
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Clients by Website</p>
                                        <h5 class="font-weight-bolder">
                                            {{ $data['byWebsite'] }}
                                        </h5>
                                        <p class="mb-0">
                                            <span
                                                class="text-success text-sm font-weight-bolder">{{ $data['webLastWeek'] }}%</span>
                                            since last week
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Other Clients</p>
                                        <h5 class="font-weight-bolder">
                                            {{ $data['otherClients'] }}
                                        </h5>
                                        <p class="mb-0">
                                            <span
                                                class="text-success text-sm font-weight-bolder">{{ $data['otherLastWeek'] }}%</span>
                                            since last week
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Clients</p>
                                        <h5 class="font-weight-bolder">
                                            {{ $data['totalClients'] }}
                                        </h5>
                                        <p class="mb-0">
                                            <span
                                                class="text-success text-sm font-weight-bolder">{{ $data['clientsLastQuartal'] }}%</span>
                                            since last quarter
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-7 mb-lg-0 mb-4">
                    <div class="card z-index-2 h-100">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <h6 class="text-capitalize">Latest Reservation Registration Chart</h6>
                            <p class="text-sm mb-0">
                                <i class="{{ $lastRegisChart['growthStatus'] }}"></i>
                                <span class="font-weight-bold">{{ $lastRegisChart['growth'] }}%</span> in
                                {{ \Carbon\Carbon::now()->format('Y') }}
                            </p>
                        </div>
                        <div class="card-body p-3">
                            <div class="chart">
                                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    {{-- <div class="card card-carousel overflow-hidden h-100 p-0">
                        <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                            <div class="carousel-inner border-radius-lg h-100">
                                <div class="carousel-item h-100 active"
                                    style="background-image: url('../assets/img/carousel-1.jpg'); background-size: cover;">
                                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                        <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                            <i class="ni ni-camera-compact text-dark opacity-10"></i>
                                        </div>
                                        <h5 class="text-white mb-1">Get started with Argon</h5>
                                        <p>There’s nothing I really wanted to do in life that I wasn’t able to get good
                                            at.</p>
                                    </div>
                                </div>
                                <div class="carousel-item h-100"
                                    style="background-image: url('../assets/img/carousel-2.jpg');background-size: cover;">
                                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                        <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                            <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                                        </div>
                                        <h5 class="text-white mb-1">Faster way to create web pages</h5>
                                        <p>That’s my skill. I’m not really specifically talented at anything except for
                                            the ability to learn.</p>
                                    </div>
                                </div>
                                <div class="carousel-item h-100"
                                    style="background-image: url('../assets/img/carousel-3.jpg');background-size: cover;">
                                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                        <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                            <i class="ni ni-trophy text-dark opacity-10"></i>
                                        </div>
                                        <h5 class="text-white mb-1">Share with us your design tips!</h5>
                                        <p>Don’t be afraid to be wrong because you can’t learn anything from a
                                            compliment.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev w-5 me-3" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next w-5 me-3" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div> --}}
                    <div class="card">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Last Reservation Registration</h6>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                @foreach ($lastRegister as $reg)
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                                <i class="ni ni-circle-08 text-white opacity-10"></i>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">
                                                    {{ $reg->first_name . ' ' . $reg->last_name }}</h6>
                                                <small class="text-xs">{{ $reg->email }}</small>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <a type="button" href="{{ route('reservation.edit', $reg->id) }}"
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="card card-lift--hover shadow border-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered table-hover align-items-center "
                                    id="three-table">
                                    <thead>
                                        <tr>
                                            <th class="text-capitalize text-white table-dark">Birthdays within the next
                                                3 months</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($upcomming['threeMonths'] as $three)
                                            <tr>
                                                <td class="w-30">
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                                {{ $three->first_name . ' ' . $three->last_name }}
                                                            </h6>
                                                            <small class="text-xs text-dark mb-0">
                                                                Birthday :
                                                                {{ date('d F Y', strtotime($three->next_birthday)) }}</small>
                                                        </div>
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
                <div class="col-lg-6">
                    <div class="card card-lift--hover shadow border-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered table-hover align-items-center "
                                    id="six-table">
                                    <thead>
                                        <tr>
                                            <th class="text-capitalize text-white table-dark">Birthdays within the next
                                                6 months</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($upcomming['sixMonths'] as $six)
                                            <tr>
                                                <td class="w-30">
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                                {{ $six->first_name . ' ' . $six->last_name }}
                                                            </h6>
                                                            <small class="text-xs text-dark mb-0">
                                                                Birthday :
                                                                {{ date('d F Y', strtotime($six->next_birthday)) }}</small>
                                                        </div>
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
            <div class="row mt-4">
                <div class="col-lg-7 mb-lg-0 mb-4">
                    <div class="card card-lift--hover shadow border-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered table-hover align-items-center "
                                    id="nine-table">
                                    <thead>
                                        <tr>
                                            <th class="text-capitalize text-white table-dark">Birthdays within the next
                                                9 months</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($upcomming['nineMonths'] as $nine)
                                            <tr>
                                                <td class="w-30">
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                                {{ $nine->first_name . ' ' . $nine->last_name }}
                                                            </h6>
                                                            <small class="text-xs text-dark mb-0">
                                                                Birthday :
                                                                {{ date('d F Y', strtotime($nine->next_birthday)) }}</small>
                                                        </div>
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
                <div class="col-lg-5">
                    <div class="card card-lift--hover shadow border-0">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Customers by Recent Birthday</h6>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                @foreach ($recentBirthday as $item)
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="icon icon-shape icon-sm me-4 bg-gradient-dark shadow text-center">
                                                <i class="ni ni-circle-08 text-white opacity-10"></i>
                                            </div>
                                            <div class="d-flex flex-column" style="margin-left: 7px">
                                                <h6 class="mb-1 text-dark text-sm">
                                                    {{ $item->first_name . ' ' . $item->last_name }}</h6>
                                                <small
                                                    class="text-xs">{{ date('d F Y', strtotime($item->birthdate)) }}</small>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <a class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"
                                                href="{{ route('reservation.edit', $item->id) }}" type="button"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <x-layouts.footer></x-layouts.footer> --}}
        </div>
    </main>
    <x-layouts.plugin title="dashboard"></x-layouts.plugin>

    @push('script')
        <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
        <script src="{{ asset('assets/vendor/datatable/datatables.min.js') }}"></script>
        <script>
            new DataTable('#three-table', {
                pageLength: 5,
                lengthChange: false
            });
            new DataTable('#six-table', {
                pageLength: 5,
                lengthChange: false
            });
            new DataTable('#nine-table', {
                pageLength: 5,
                lengthChange: false
            });
            var monthLastRegis = @json($lastRegisChart['month']);
            var clientsLastRegis = @json($lastRegisChart['clients']);
            var ctx1 = document.getElementById("chart-line").getContext("2d");

            var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

            gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
            gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
            gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
            new Chart(ctx1, {
                type: "line",
                data: {
                    labels: monthLastRegis,
                    datasets: [{
                        label: "clients",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#5e72e4",
                        backgroundColor: gradientStroke1,
                        borderWidth: 3,
                        fill: true,
                        data: clientsLastRegis,
                        maxBarThickness: 6

                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: '#fbfbfb',
                                font: {
                                    size: 11,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                color: '#ccc',
                                padding: 20,
                                font: {
                                    size: 11,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                    },
                },
            });
        </script>
    @endpush

</x-layouts.app>
