<?php

use Illuminate\Database\Seeder;

class UsertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name'         => "super-admin",
            'display_name' => 'Super Admin',
            'description'  => 'Super Admin'
        ]);
        DB::table('roles')->insert([
            'name'         => "school-admin",
            'display_name' => 'Admin',
            'description'  => 'Admin of school'
        ]);
        DB::table('roles')->insert([
            'name'         => "teacher",
            'display_name' => 'Teacher',
            'description'  => 'Teacher'
        ]);
        DB::table('roles')->insert([
            'name'         => "student",
            'display_name' => 'Student',
            'description'  => 'Student'
        ]);
        DB::table('users')->insert([
            'first_name' => "Sunil",
            'last_name' => 'Tiwari',
            'mobile'=>1234567890,
            'email' => 'sunil.tiwari@gmail.com',
            'password' => bcrypt('pass'),
            'status'=> 1,
            'email_verified_at'=>'2020-06-16 00:00:00',
            'avatar' => 'QfcJkZ0JxX6JOGLqnhLvwU7sc5uSe0sRQeRHGdiD.jpg',
        ]);
        DB::table('role_user')->insert([
            'user_id' =>1,
            'role_id' =>1,
            'user_type' => 'User::class'
        ]);
    }
}
