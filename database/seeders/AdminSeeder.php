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
            'first_name' => "Bappi",
            'last_name' => "Saha",
            'email' => 'admin@admin.com',
            'password' => "$2y$10$1n4x1BPcTRxS6Z9x9NuzteT8ESiQ0sKhQJZ.twmsbeg4FvyPzGU1C",
        ]);
    }
}
