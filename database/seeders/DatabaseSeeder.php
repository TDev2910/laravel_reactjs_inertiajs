<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    { 
        for($i = 2 ; $i<=10; $i++)
        {
            $user = new User();
            $user->name = "User ".$i;
            $user->email = "user".$i ."@gmail.com";
            $user->password = bcrypt('123456');    
            $user->save();
        }
    }
}
