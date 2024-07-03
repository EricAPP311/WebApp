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

        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: '{{ route('reload-captcha') }}',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });

        $(document).ready(function() {
            $('#registration_date').on('input', function() {
                var value = $(this).val();

                // Memisahkan tanggal dan waktu
                var [datePart, timePart] = value.split(' ');

                // Memisahkan hari, bulan, dan tahun
                var [day, month, year] = datePart.split('-').map(Number);

                // Memisahkan jam, menit, dan detik
                var [hours, minutes, seconds] = timePart.split(':').map(Number);

                // Membuat objek Date dari komponen tanggal dan waktu
                var registrationDate = new Date(year, month - 1, day, hours, minutes, seconds);

                // Menambahkan satu tahun ke tanggal registrasi
                var birthdate = new Date(registrationDate);
                birthdate.setFullYear(birthdate.getFullYear() + 1);

                // Format tanggal ke string sesuai format input (d-m-Y)
                var birthYear = birthdate.getFullYear();
                var birthMonth = ('0' + (birthdate.getMonth() + 1)).slice(-2); // Bulan dimulai dari 0
                var birthDay = ('0' + birthdate.getDate()).slice(-2);

                var formattedBirthdate = birthDay + '-' + birthMonth + '-' + birthYear;

                // Menetapkan nilai elemen dengan id "birthdate"
                $('#birthdate').val(formattedBirthdate);
            });
        });
    </script>
@endpush
