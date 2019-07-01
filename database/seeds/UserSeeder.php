<?php

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
        DB::table('users')->insert([
            'username' => 'trieuniemit',
            'email' => 'trieuniemit@gmail.com',
            'password' => bcrypt('12345'),
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('users')->insert([
            'username' => 'huyho',
            'email' => 'b1.maitrongtoi@gmail.com',
            'password' => bcrypt('12345'),
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('users')->insert([
            'username' => 'truongtran',
            'email' => 'truongtran@gmail.com',
            'password' => bcrypt('12345'),
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
