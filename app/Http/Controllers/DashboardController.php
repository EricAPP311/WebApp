<?php

namespace App\Http\Controllers;

use App\Services\WidgetChartService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $services = new WidgetChartService;
        $data = $services->getData();
        return view('admin.dashboard', compact('data'));
    }
}
