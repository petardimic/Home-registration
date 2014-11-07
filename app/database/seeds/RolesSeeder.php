<?php
class RolesSeeder extends Seeder {

    public function run()
    {
        // to use non Eloquent-functions we need to unguard
        Eloquent::unguard();

        // All existing users are deleted !!!
        DB::table('roles')->delete();
        
        $role = new Role;
        $role->role = 'admin';     
        $role->save();   

        $role1 = new Role;
        $role1->role = 'officer';
        $role1->save();

        $role2 = new Role;
        $role2->role = 'user';
        $role2->save();
    }
}