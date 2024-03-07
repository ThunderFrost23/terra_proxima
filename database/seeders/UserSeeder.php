<?php

namespace Database\Seeders;

use Domain\User\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::create([
            'name' => 'Proxima',
            'email' => 'proxima@demo.com',
            'password' => bcrypt('proxima974')
        ]);
    }
}
