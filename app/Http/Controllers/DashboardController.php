<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('member.dashboard.index');
    }

    public function contacts()
    {
        $contacts = [
            'Whatsapp' => '0123456789',
            'Instagram' => '@erifit_fitness',
            'Facebook' => 'EriFit Fitness Center',
        ];

        return view('contact', [
            'contacts' => $contacts,
        ]);
    }
}
