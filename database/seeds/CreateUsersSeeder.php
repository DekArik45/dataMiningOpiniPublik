<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@kominfo.com',
                'is_admin'=>'1',
               'password'=> bcrypt('kominfo123'),
            ],
            [
               'name'=>'User',
               'email'=>'user@kominfo.com',
                'is_admin'=>'0',
               'password'=> bcrypt('kominfo123'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
