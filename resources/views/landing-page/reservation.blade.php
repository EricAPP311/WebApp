@extends('layouts.landing.common')
@section('title', "$title")
@section('content')
    <div class="container">
        <x-forms.input />
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
