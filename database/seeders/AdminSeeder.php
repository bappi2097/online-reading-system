<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'first_name' => "John",
            'last_name' => "Doe",
            'email' => 'admin@admin.com',
            'password' => "$2y$10$9Byo02hPNA/w64V6lMCYu.eAcBmP/ezoSh4Hc6GFdjDRqgjI0FpRq",
        ]);
    }
}
