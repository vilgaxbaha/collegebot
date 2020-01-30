<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            //'first_name' => 'Admin',
            'username' => 'Admin',
            'password' => Hash::make('123456789'),
        ]);

    }
}
