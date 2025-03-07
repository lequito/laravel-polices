<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        
        $roles = ['admin', 'moderador', 'visitor'];

        $users = [];

        foreach($roles as $role){
            $user[] = [
                'name'       => $role,
                'email'      => "$role@mail.com",
                'password'   => bcrypt('Aa123456'),
                'role'       => $role,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('users')->insert($user);
    }
}
