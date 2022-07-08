<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => "Soro",
            'prenoms' => "Ibrahim",
            'phone' => "0707018421",
            'niveau_etude' => "Master 2",
            'specialite' => "BCD",
            'email' => "ibrahimsoro36@gmail.com",
            'password' => bcrypt("Bsoro96@")
        ]);
    }
}
