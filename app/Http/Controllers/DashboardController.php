<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $fullname = session()->get('fullname');

        return view('dashboard', [
            'fullname' => $fullname
        ]);
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
