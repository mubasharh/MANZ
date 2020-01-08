<?php

use Illuminate\Database\Seeder;
use MANZ\User;
use Illuminate\Support\Facades\Hash;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	
          $user = User::create([
            'name' => 'Mubashar Hussain',
            'email' => 'mubashar259@gmail.com',
            'password' => Hash::make('12345')
        ]);

//           $users = [
//                 [
//             'name' => 'Mubashar Hussain',
//             'email' => 'mubi@admin.com',
//             'password' => Hash::make('1234')
//                 ],[
//                     'name' => 'Zeeshan',
//                     'email' => 'zee@admin.com',
//                     'password' => Hash::make('1234')
//                 ]
//             ];
// $user = User::insert($users);

    }
}
