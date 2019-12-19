<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'John Doe',
            'email' => 'demo4@demo.com',
            'phone' => '5858585858',
            'password' => bcrypt('secret'),
        ]);
    }
}
