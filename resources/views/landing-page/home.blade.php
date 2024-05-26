@extends('layouts.landing.common')
@section('title', 'Home')
@push('styles')
    <link href="{{ asset('assets/vendor/datatable/datatables.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@endpush
@section('content')
    <div class="wrapper">
        <div class="section section-hero section-shaped">
            <div class="shape shape-style-1 shape-primary">
                <span class="span-150"></span>
                <span class="span-50"></span>
                <span class="span-50"></span>
                <span class="span-75"></span>
                <span class="span-100"></span>
                <span class="span-75"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
            </div>
            <div class="page-header">
                <div class="container shape-container d-flex align-items-center py-lg">
                    <div class="col px-0">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6 text-center">
                                <img src="{{ asset('assets/landing') }}/img/brand/artech-white.png" style="width: 100%;"
                                    class="img-fluid">
                                <p class="lead text-white">Welcome to Artech Design HubCenter, your premier web system for
                                    easy and efficient reservation management. Enhance productivity with our advanced,
                                    all-in-one solution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Clients by Phone</p>
                                            <h6 class="font-weight-bolder">
                                                {{ $data['byPhone'] }}
                                            </h6>
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
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Clients by Website</p>
                                            <h6 class="font-weight-bolder">
                                                {{ $data['byWebsite'] }}
                                            </h6>
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
                        <div class="card card-lift--hover shadow border-0">
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
                        <div class="card card-lift--hover shadow border-0">
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
                        <div class="card card-lift--hover shadow border-0">
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
                        <div class="card card-lift--hover shadow border-0">
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
                                                <div class="d-flex flex-column" style="margin-left: 7px">
                                                    <h6 class="mb-1 text-dark text-sm">
                                                        {{ $reg->first_name . ' ' . $reg->last_name }}</h6>
                                                    <small class="text-xs">{{ $reg->email }}</small>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button
                                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
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
                                                <th class="text-capitalize text-white table-dark">Birthdays within
                                                    the Next 3 Months</th>
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
                                                <th class="text-capitalize text-white table-dark">Birthdays within
                                                    the Next 6 Months</th>
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
                    <div class="col-lg-8 mb-lg-0 mb-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm table-bordered table-hover align-items-center "
                                        id="nine-table">
                                        <thead>
                                            <tr>
                                                <th class="text-capitalize text-white table-dark">Birthdays within
                                                    the Next 9 Months</th>
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
                    <div class="col-lg-4">
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
                                                <button
                                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
    <script src="{{ asset('assets/vendor/datatable/datatables.min.js') }}"></script>
    <script>
        new DataTable('#three-table', {
            pageLength: 5,
            lengthChange: false,
            columnDefs: [{
                orderable: false,
                targets: 0
            }]
        });
        new DataTable('#six-table', {
            pageLength: 5,
            lengthChange: false,
            columnDefs: [{
                orderable: false,
                targets: 0
            }]
        });
        new DataTable('#nine-table', {
            pageLength: 5,
            lengthChange: false,
            columnDefs: [{
                orderable: false,
                targets: 0
            }]
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
