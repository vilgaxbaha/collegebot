<?php

use Illuminate\Database\Seeder;

class Admin_loginsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_logins')->insert([
            'name' => Str::random(10),
            'username' => Str::random(10).'vilgax',
            'password' => bcrypt('12345689'),
        ]);
    }

        //

}
