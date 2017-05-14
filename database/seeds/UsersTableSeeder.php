<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
        [
            'name'              => 'Admin',
            'username'          => 'admin',
            'password'          => bcrypt('admin'),
            'role'    			=> 'admin',
        ],
        [
            'name'              => 'Teller',
            'username'          => 'teller',
            'password'          => bcrypt('teller'),
            'role'    			=> 'teller',
        ]);


        DB::table('users')->insert($users);
    }
}
