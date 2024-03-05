<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Stall;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Charts\AdminChart;
use App\Models\Tenant;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'user') {
                return view('user.dashboard');
            } else if ($usertype == 'admin') {
                // Count the number of users
                $userCount = User::count();

                // Count the number of tenants
                $tenantCount = Tenant::count();

                // Get the count of tenants by address
                $tenantByAddress = Tenant::whereNotNull('address')
                    ->groupBy('address')
                    ->orderBy('total')
                    ->pluck(DB::raw('count(address) as total'), 'address')
                    ->all();

                // Create a new instance of AdminChart for Tenant Demographics by Address
                $tenantByAddressChart = new AdminChart();
                $tenantByAddressChart->labels(array_keys($tenantByAddress))
                    ->dataset('Tenant Demographics by Address', 'bar', array_values($tenantByAddress))
                    ->backgroundColor(['#7158e2', '#3ae374', '#ff3838']);

                // Count the number of stalls in each status
                $stallStatuses = Stall::groupBy('status')
                    ->orderBy('total')
                    ->pluck(DB::raw('count(status) as total'), 'status')
                    ->all();

                // Create a new instance of AdminChart for Stall Statuses
                $stallStatusesChart = new AdminChart();
                $stallStatusesChart->labels(array_keys($stallStatuses))
                    ->dataset('Stall Statuses', 'pie', array_values($stallStatuses))
                    ->backgroundColor(['#ff5733', '#ffc300', '#36a2eb']);

                // Create a new instance of AdminChart for User vs Tenant Count
                $countChart = new AdminChart();
                $countChart->labels(['Users', 'Tenants'])
                    ->dataset('User vs Tenant Count', 'bar', [$userCount, $tenantCount])
                    ->backgroundColor(['#ff3838', '#fbbd08']);

                // Set chart options
                $countChart->options([
                    'responsive' => true,
                    'legend' => ['display' => true],
                    'tooltips' => ['enabled' => true],
                    'aspectRatio' => 1,
                    'scales' => [
                        'yAxes' => [
                            [
                                'display' => true,
                            ],
                        ],
                        'xAxes' => [
                            [
                                'gridLines' => ['display' => false],
                                'display' => true,
                            ],
                        ],
                    ],
                ]);

                return view('admin.dashboard', compact('tenantByAddressChart', 'stallStatusesChart', 'countChart'));
            } else {
                return redirect()->route('login');
            }
        }
    }
}
