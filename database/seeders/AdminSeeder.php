<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use RuntimeException;

use function PHPUnit\Framework\throwException;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = env('ADMIN_EMAIL');
        $username = env('ADMIN_USERNAME', 'admin');
        $password = env('ADMIN_PASSWORD');

        if (empty($email) || (empty($password))) {
            throw new RuntimeException('ADMIN_EMAIL dan ADMIN_PASSWORD wajib diisi terlebih dahulu!');
        }

        User::updateOrCreate(
            ['email' => $email],
            [
                'username' => $username,
                'password' => Hash::make($password),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]
        );
    }
}
