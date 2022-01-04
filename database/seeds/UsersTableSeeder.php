<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => "zaki",
            'last_name' => "zaki",
            'gender' => "male",
            'phone' => "55823754377",
            'address' => "sba",
            'email' => "admin@gmail.com",
            'password' => bcrypt('admin'),
            'avatar' => 'boy-1.png',
            'about' => "hello from the other world",
            'role' => 'admin',
            'status' => TRUE,
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        factory(App\Model\User::class, 10)->create();
    }
}



