<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PersonalTrainer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PersonalTrainerController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:50', 'unique:users,username'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
            'name' => ['required', 'string', 'max:100'],
            'phone_number' => ['nullable', 'string', 'max:20'],
            'specialization' => ['nullable', 'string', 'max:80'],
            'certification' => ['nullable', 'string', 'max:80'],
        ]);

        DB::transaction(function () use ($validated) {
            $user = User::create([
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role' => 'personal_trainer'
            ]);
            
            PersonalTrainer::create([
                'user_id' => $user->id,
                'name' => $validated['name'],
                'phone_number' => $validated['email'],
                'specialization' => $validated['specialization'],
                'certification' => $validated['certification'],
                'is_active' => true,
                
            ]);
        });

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Akun Personal Trainer berhasil dibuat!');
    }
}
