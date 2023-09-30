<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->fullname = 'Santiago Osorio Giraldo';
        $user->birthday = '2003-04-27';
        $user->email = 'santiagoo427@hotmail.com';
        $user->password = bcrypt('admin');
        $user->address = '';
        $user->role_id = 1;
        $user->save();

        $user = new User;
        $user->fullname = 'Laura Garcia';
        $user->birthday = '1991-02-16';
        $user->email = 'laura@hotmail.com';
        $user->password = bcrypt('guest');
        $user->address = '';
        $user->role_id = 2;
        $user->save();

        $user = new User;
        $user->fullname = 'Juan Simon';
        $user->birthday = '2008-04-12';
        $user->email = 'juansimon@hotmail.com';
        $user->password = bcrypt('customer');
        $user->address = '';
        $user->role_id = 3;
        $user->save();
    }
}
