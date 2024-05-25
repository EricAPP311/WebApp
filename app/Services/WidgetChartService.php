<?php

namespace App\Services;

use App\Models\Reservation;

class WidgetChartService
{
      public function getData()
      {
            $totalClients = Reservation::count();
            // dd($totalClients);
            return [
                  'totalClients' => $totalClients
            ];
      }
}
