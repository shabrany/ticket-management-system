<?php 

class UserTableSeeder extends Seeder 
{
    public function run()
    {
        DB::table('users')->truncate();
        User::create(array(
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => Hash::make('flamenco'),
            'role' => 'admin',
        ));
    }
}