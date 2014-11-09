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
        $user->email = 'admin@localhost';
        $user->save();

        $user1 = new User;
        $user1->permission = 'Officer';
        $user1->name = 'Gendou';
        $user1->surname = 'Ikari';
        $user1->username = 'Off';
        $user1->password = Hash::make('123');
        $user1->idcard = '1111111111111';
        $user1->email = 'admin@localhost';
        $user1->save();

        $user2 = new User;
        $user2->permission = 'User';
        $user2->name = 'Gendou';
        $user2->surname = 'Ikari';
        $user2->username = 'bell';
        $user2->password = Hash::make('123');
        $user2->idcard = '1111111111111';
        $user2->email = 'admin@localhost';
        $user2->save();

        // alternativ to eloquent we can also use direct database-methods
        /*
        User::create(array(
            'username'  => 'admin',
            'password'  => Hash::make('password'),
            'email'     => 'admin@localhost'
        ));
        */
    }
}