<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AppointmentSeeder extends Seeder
{
    public function run()
    {
        $user = User::find(1); 
        if ($user) {
            $user->appointments()->create([
                'description' => 'Controle afspraak',
                'appointment_date' => now()->addDays(3),
            ]);
        }
    }
}