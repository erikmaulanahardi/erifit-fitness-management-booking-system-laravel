<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;

class ProfileController extends Controller
{   
    public function index(Request $request){
        $user = $request->user();
        $member = $user->member;

        return view('profiles.index', [
            'user' => $user,
            'member' => $member, 
        ]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string'],
            'date_of_birth' => ['required', 'date'],
            'body_weight' => ['required', 'numeric', 'min:30', 'max:300'],
            'body_height' => ['required', 'numeric', 'min:100', 'max:250'], 
            'body_fat_percentage' => ['required', 'numeric', 'min:5', 'max:40'],
        ]);

        $request->user()->member()->updateOrCreate(
            [],
            [
                ...$validated,
                'is_active' => true,
            ]
            
        );

        return to_route('profile')->with('success', 'Yeyyy, profil kamu sudah berhasil diubah dan tersimpan');
    }

    public function getProfile (Request $request) {
        
    }

}
