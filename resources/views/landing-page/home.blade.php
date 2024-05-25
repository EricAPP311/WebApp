@extends('layouts.landing.common')
@section('title', 'Home')
@push('style')
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
                    <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Users</p>
                                            <h5 class="font-weight-bolder">
                                                2,300
                                            </h5>
                                            <p class="mb-0">
                                                <span class="text-success text-sm font-weight-bolder">+3%</span>
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
                    <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
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
                                                <span class="text-danger text-sm font-weight-bolder">-2%</span>
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
                                <h6 class="text-capitalize">Sales overview</h6>
                                <p class="text-sm mb-0">
                                    <i class="fa fa-arrow-up text-success"></i>
                                    <span class="font-weight-bold">4% more</span> in 2021
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
                        <div class="card card-lift--hover shadow border-0 rounded overflow-hidden ">
                            <div id="carousel_example" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel_example" data-slide-to="1"></li>
                                    <li data-target="#carousel_example" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('assets') }}/img/carousel-1.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                            <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                                <i class="ni ni-camera-compact text-dark opacity-10"></i>
                                            </div>
                                            <h5 class="text-white mb-1">Get started with Argon</h5>
                                            <p>There’s nothing I really wanted to do in life that I wasn’t able to get good
                                                at.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets') }}/img/carousel-2.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                            <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                                <i class="ni ni-camera-compact text-dark opacity-10"></i>
                                            </div>
                                            <h5 class="text-white mb-1">Faster way to create web pages</h5>
                                            <p>That’s my skill. I’m not really specifically talented at anything except for
                                                the ability to learn.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets') }}/img/carousel-3.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                            <div
                                                class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                                <i class="ni ni-camera-compact text-dark opacity-10"></i>
                                            </div>
                                            <h5 class="text-white mb-1">Share with us your design tips!</h5>
                                            <p>Don’t be afraid to be wrong because you can’t learn anything from a
                                                compliment.</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carousel_example" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel_example" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-7 mb-lg-0 mb-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-header pb-0 p-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-2">Sales by Country</h6>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-items-center ">
                                    <tbody>
                                        <tr>
                                            <td class="w-30">
                                                <div class="d-flex px-2 py-1 align-items-center">
                                                    <div>
                                                        <img src=".{{ asset('assets/landing') }}/img/icons/flags/US.png"
                                                            alt="Country flag">
                                                    </div>
                                                    <div class="ms-4">
                                                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                        <h6 class="text-sm mb-0">United States</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                                    <h6 class="text-sm mb-0">2500</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                                                    <h6 class="text-sm mb-0">$230,900</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <div class="col text-center">
                                                    <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                                    <h6 class="text-sm mb-0">29.9%</h6>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="w-30">
                                                <div class="d-flex px-2 py-1 align-items-center">
                                                    <div>
                                                        <img src=".{{ asset('assets/landing') }}/img/icons/flags/DE.png"
                                                            alt="Country flag">
                                                    </div>
                                                    <div class="ms-4">
                                                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                        <h6 class="text-sm mb-0">Germany</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                                    <h6 class="text-sm mb-0">3.900</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                                                    <h6 class="text-sm mb-0">$440,000</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <div class="col text-center">
                                                    <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                                    <h6 class="text-sm mb-0">40.22%</h6>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="w-30">
                                                <div class="d-flex px-2 py-1 align-items-center">
                                                    <div>
                                                        <img src=".{{ asset('assets/landing') }}/img/icons/flags/GB.png"
                                                            alt="Country flag">
                                                    </div>
                                                    <div class="ms-4">
                                                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                        <h6 class="text-sm mb-0">Great Britain</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                                    <h6 class="text-sm mb-0">1.400</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                                                    <h6 class="text-sm mb-0">$190,700</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <div class="col text-center">
                                                    <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                                    <h6 class="text-sm mb-0">23.44%</h6>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="w-30">
                                                <div class="d-flex px-2 py-1 align-items-center">
                                                    <div>
                                                        <img src=".{{ asset('assets/landing') }}/img/icons/flags/BR.png"
                                                            alt="Country flag">
                                                    </div>
                                                    <div class="ms-4">
                                                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                        <h6 class="text-sm mb-0">Brasil</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                                    <h6 class="text-sm mb-0">562</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                                                    <h6 class="text-sm mb-0">$143,960</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <div class="col text-center">
                                                    <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                                    <h6 class="text-sm mb-0">32.14%</h6>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-header pb-0 p-3">
                                <h6 class="mb-0">Categories</h6>
                            </div>
                            <div class="card-body p-3">
                                <ul class="list-group">
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                                <i class="ni ni-mobile-button text-white opacity-10"></i>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">Devices</h6>
                                                <span class="text-xs">250 in stock, <span class="font-weight-bold">346+
                                                        sold</span></span>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                                <i class="ni ni-tag text-white opacity-10"></i>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">Tickets</h6>
                                                <span class="text-xs">123 closed, <span class="font-weight-bold">15
                                                        open</span></span>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                                <i class="ni ni-box-2 text-white opacity-10"></i>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">Error logs</h6>
                                                <span class="text-xs">1 is active, <span class="font-weight-bold">40
                                                        closed</span></span>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                                <i class="ni ni-satisfied text-white opacity-10"></i>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">Happy users</h6>
                                                <span class="text-xs font-weight-bold">+ 430</span>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button>
                                        </div>
                                    </li>
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
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e72e4",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
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
