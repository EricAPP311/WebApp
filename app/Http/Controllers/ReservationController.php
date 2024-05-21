<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Http\Requests\UploadFileRequest;
use App\Imports\ReservationImport;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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
        Reservation::create($request->all());
        alert()->success('Success', 'Les données de réservation ont été créées avec succès!');
        return redirect()->route('reservation.index');
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
}
