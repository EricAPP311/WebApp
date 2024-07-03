<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Imports\ReservationImport;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\UploadFileRequest;
use App\Http\Requests\ReservationRequest;
use App\Http\Requests\HomeReservationRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Create Reservation'
        ];
        return view('reservation.form', $data);
    }

    /**
     * Show the form for uploading a new resource.
     */
    public function uploadForm()
    {
        return view('reservation.upload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function import(UploadFileRequest $request)
    {
        Excel::import(new ReservationImport, $request->file('file_import'));
        alert()->success('Success', 'Données de réservation importées avec succès!');
        return redirect()->route('reservation.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request)
    {
        $request['registration_date'] = Carbon::parse($request->input('registration_date'))->format('Y-m-d H:i:s');
        $request['birthdate'] = Carbon::parse($request->input('birthdate'))->format('Y-m-d');
        Reservation::create($request->all());
        alert()->success('Success', 'Les données de réservation ont été créées avec succès!');
        return redirect()->route('reservation.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeHome(HomeReservationRequest $request)
    {
        // Debugging point
        if (captcha_check($request->captcha) == false) {
            alert()->error('Error', "Le captcha que vous avez saisi est incorrect.");
            return back();
        }
        // Format the dates
        $request['registration_date'] = Carbon::parse($request->input('registration_date'))->format('Y-m-d H:i:s');
        $request['birthdate'] = Carbon::parse($request->input('birthdate'))->format('Y-m-d');

        // Create reservation
        Reservation::create($request->all());

        alert()->success('Success', 'Les données de réservation ont été créées avec succès!');
        return redirect()->route('landing.reservation');
    }


    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        $data = [
            'title' => 'Edit Reservation',
            'reservation' => $reservation,
        ];
        return view('reservation.form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReservationRequest $request, Reservation $reservation)
    {
        $request['registration_date'] = Carbon::parse($request->input('registration_date'))->format('Y-m-d H:i:s');
        $request['birthdate'] = Carbon::parse($request->input('birthdate'))->format('Y-m-d');
        $reservation->update($request->all());
        alert()->success('Success', 'Les données de réservation ont été mises à jour avec succès!');
        return redirect()->route('reservation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        alert()->success('Success', 'Les données de réservation ont été supprimées avec succès!');
        return redirect()->back();
    }

    public function landing()
    {

        $data = [
            'title' => 'Reservation Form'
        ];
        return view('landing-page.reservation', $data);
    }
}
