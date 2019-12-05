<?php

use Illuminate\Database\Seeder;
use App\User;
class SuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->username = 'super.user';
        $user->name = 'Super User';
        $user->email = 'super_user@gmail.com';
        $user->password = bcrypt('password');
        $user->phone = '7575757575';
        $user->save();
        $user->assignRole('Super_User');
    }
}
