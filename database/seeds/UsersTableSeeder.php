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
            'email' => 'olalekanarowoselu@gmail.com',
            'phone' => '5858585858',
            'password' => bcrypt('secret'),
        ]);
    }
}
