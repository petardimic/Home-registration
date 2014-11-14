<?php
class UserTableSeeder extends Seeder {

    public function run()
    {
        // to use non Eloquent-functions we need to unguard
        Eloquent::unguard();

        // All existing users are deleted !!!
        DB::table('users')->delete();

        // add user using Eloquent
        $user = new User;
        $user->permission = 'Admin';
        $user->name = 'Gendou';
        $user->surname = 'Ikari';
        $user->username = 'admin1';
        $user->password = Hash::make('1142');
        $user->idcard = '1111111111111';
        $user->email = 'admin@localhost.com';
        $user->save();

        $user1 = new User;
        $user1->permission = 'Officer';
        $user1->name = 'Officer';
        $user1->surname = '01';
        $user1->username = 'off';
        $user1->password = Hash::make('123');
        $user1->idcard = '1111111111111';
        $user1->email = 'officer@localhost.com';
        $user1->save();

        $user2 = new User;
        $user2->permission = 'User';
        $user2->name = 'Bell';
        $user2->surname = 'Teerapan';
        $user2->username = 'bell';
        $user2->password = Hash::make('123');
        $user2->idcard = '1111111111111';
        $user2->email = 'bellboy@localhost.com';
        $user2->save();
    }
}