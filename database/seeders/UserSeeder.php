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
            'first_name' => "Akash",
            'last_name' => "Kibrea",
            'email' => 'admin@example.com',
            'password' => bcrypt('admin123')
        ]);
    }
}
