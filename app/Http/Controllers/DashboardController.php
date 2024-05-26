<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Services\WidgetChartService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $services = new WidgetChartService;
        $data = $services->getData();
        $lastRegisChart = $services->getLastRegistrationChart();
        $lastRegister = Reservation::orderBy('registration_date', 'DESC')->limit(6)->get();
        $recentBirthday = Reservation::orderBy('birthdate', 'DESC')->limit(6)->get();
        $upcomming = $services->getBirthday();
        // dd($lastRegis);
        return view('admin.dashboard', compact('data', 'lastRegisChart', 'lastRegister', 'recentBirthday', 'upcomming'));
    }
}
