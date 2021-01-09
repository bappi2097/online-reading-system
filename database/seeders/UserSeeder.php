<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => "Bappi",
            'last_name' => "Saha",
            'email' => 'admin@example.com',
            'password' => bcrypt('admin123')
        ]);
    }
}
