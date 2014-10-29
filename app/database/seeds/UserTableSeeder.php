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
        $user->name = 'Gendou';
        $user->surname = 'Ikari';
        $user->username = 'admin1';
        $user->password = Hash::make('1142');
        $user->idcard = '1111111111111';
        $user->address = '1142/58 adminHome Bangkok';
        $user->email = 'admin@localhost';
        $user->save();

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