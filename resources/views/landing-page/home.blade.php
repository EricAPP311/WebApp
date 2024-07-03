@extends('layouts.landing.common')
@section('title', 'Home')
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
                                <img src="{{ asset('assets') }}/img/logo.png" style="width: 50%;" class="img-fluid">
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
                <x-forms.input />
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        flatpickr('.datetimepicker', {
            enableTime: true,
            dateFormat: "d-m-Y H:i:s",
        });

        flatpickr('.datepicker', {
            // enableTime: true,
            dateFormat: "d-m-Y",
        });
    </script>
    <script type="text/javascript">
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: '{{ route('reload-captcha') }}',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
@endpush
