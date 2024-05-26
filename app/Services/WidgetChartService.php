<?php

namespace App\Services;

use Carbon\Carbon;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;

class WidgetChartService
{
      public function getData()
      {
            $totalClients = Reservation::count();
            return [
                  'totalClients' => $totalClients,
                  'byPhone' => $this->getTotalbyType('Phone'),
                  'byWebsite' => $this->getTotalbyType('Website'),
                  'otherClients' => $this->getTotalbyType(),
                  'phoneLastWeek' => $this->percentageLastWeek('Phone'),
                  'webLastWeek' => $this->percentageLastWeek('Website'),
                  'otherLastWeek' => $this->percentageLastWeek(),
                  'clientsLastQuartal' => $this->percentageLastQuartal()
            ];
      }

      public function getTotalbyType($type = null)
      {
            return Reservation::where('reservation_type', $type)->count();
      }

      public function percentageLastWeek($type = null)
      {
            $nowUpdate = Carbon::now();
            $now = Carbon::now();

            $startOfWeek = $now->startOfWeek(Carbon::MONDAY);

            $endOfLastWeek = $startOfWeek->subSecond();

            $startOfLastWeek = $endOfLastWeek->copy()->startOfWeek(Carbon::MONDAY);
            $startOfLastWeek = $startOfLastWeek->format('Y-m-d H:i:s');
            $nowUpdate = $nowUpdate->format('Y-m-d H:i:s');

            $triggerCount = Reservation::where('reservation_type', $type)
                  ->where('registration_date', '>=', $startOfLastWeek)
                  ->where(function ($query) use ($nowUpdate) {
                        $query->where('registration_date', '<=', $nowUpdate);
                  })->count();

            $commonCount = $this->getTotalbyType($type);

            $percentage = self::getpercentage($triggerCount, $commonCount);

            if ($percentage > 0) {
                  $percentage = "+" . $percentage;
            }

            return $percentage;
      }

      public function getpercentage($trigger, $common)
      {
            if ($common != 0) {
                  $percentage = $trigger / $common * 100;
                  if (floor($percentage) == $percentage) {
                        $percentage = number_format($percentage, 0);
                  } else {
                        $percentage = number_format($percentage, 2);
                  }
            } else {
                  $percentage = 0;
            }
            return $percentage;
      }

      public function percentageLastQuartal()
      {
            $now = Carbon::now();

            $oneYearAgo = $now->copy()->subYear();

            $triggerCount = Reservation::where('registration_date', '>=', $oneYearAgo)
                  ->where(function ($query) use ($now) {
                        $query->where('registration_date', '<=', $now);
                  })->count();

            $commonCount = Reservation::count();

            $percentage = self::getpercentage($triggerCount, $commonCount);

            if ($percentage > 0) {
                  $percentage = "+" . $percentage;
            }

            return $percentage;
      }

      public function getLastRegistrationChart()
      {
            $yearNow = Carbon::now()->format('Y');
            $month = DB::raw('MONTHNAME(registration_date) as month');
            $year = DB::raw('DATE_FORMAT(registration_date,"%Y") as year');
            $client = DB::raw('COUNT(id) as clients');
            $max_date = DB::raw('MAX(registration_date) as max_date');
            $lastData = Reservation::select($month, $year, $client, $max_date)
                  ->groupBy('month', 'year')
                  ->orderBy('max_date', 'asc')
                  ->get();
            $clients = [];
            $month_name = [];
            foreach ($lastData as $k) {
                  if ($k->year == $yearNow) { // Akumulasi saldo untuk bulan selanjutnya
                        $clients[] = $k->clients;
                        $month_name[] = substr($k->month, 0, 3);
                  }
            }

            $triggerCount = Reservation::whereYear('registration_date', $yearNow)->count();

            $commonCount = Reservation::count();

            $growth = self::getpercentage($triggerCount, $commonCount);

            if ($growth <= 0) {
                  if ($growth == 0) {
                        $growthStatus = 'text-success';
                  } else {
                        $growthStatus = 'fa fa-arrow-down text-danger';
                  }
            } else {
                  $growthStatus = 'fa fa-arrow-up text-success';
            }

            return [
                  'clients' => $clients,
                  'month' => $month_name,
                  'growth' => $growth,
                  'growthStatus' => $growthStatus
            ];
      }

      public function getBirthday()
      {
            $today = Carbon::today();

            $reservations = Reservation::all()->sortBy(function ($reservation) {
                  return $reservation->next_birthday;
            });

            // 3 bulan ke depan
            $threeMonthsFromNow = $today->copy()->addMonths(3);
            $threeMonthsUlangTahun = $reservations->filter(function ($query) use ($today, $threeMonthsFromNow) {
                  $nextBirthday = $query->next_birthday;
                  return $nextBirthday->between($today, $threeMonthsFromNow);
            });

            // 6 bulan ke depan
            $sixMonthsFromNow = $today->copy()->addMonths(6);
            $sixMonthsUlangTahun = $reservations->filter(function ($query) use ($threeMonthsFromNow, $sixMonthsFromNow) {
                  $nextBirthday = $query->next_birthday;
                  return $nextBirthday->between($threeMonthsFromNow, $sixMonthsFromNow);
            });

            // 9 bulan ke depan
            $nineMonthsFromNow = $today->copy()->addMonths(9);
            $nineMonthsUlangTahun = $reservations->filter(function ($query) use ($sixMonthsFromNow, $nineMonthsFromNow) {
                  $nextBirthday = $query->next_birthday;
                  return $nextBirthday->between($sixMonthsFromNow, $nineMonthsFromNow);
            });

            // dd($sixMonthsUlangTahun);
            return [
                  'threeMonths' => $threeMonthsUlangTahun,
                  'sixMonths' => $sixMonthsUlangTahun,
                  'nineMonths' => $nineMonthsUlangTahun
            ];
      }
}
