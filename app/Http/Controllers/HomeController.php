<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\WidgetChartService;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = new WidgetChartService;
        $data = $services->getData();
        $lastRegisChart = $services->getLastRegistrationChart();
        $lastRegister = Reservation::orderBy('registration_date', 'DESC')->limit(4)->get();
        $recentBirthday = Reservation::orderBy('birthdate', 'DESC')->limit(6)->get();
        $upcomming = $services->getBirthday();
        // dd($upcomming['threeMonths']);
        return view('landing-page.home', compact('data', 'lastRegisChart', 'lastRegister', 'recentBirthday', 'upcomming'));
    }
}
