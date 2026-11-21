<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function membershipPlans()
    {
        $plans = [
            'Paket Murmer - 1 Month',
            'Paket Oke - 3 Months',
            'Paket Mantap - 6 Months',
            'Paket Dabest - 12 Months',
        ];

        return view('membership', [
         'plans' => $plans,
        ]);
    }
}
