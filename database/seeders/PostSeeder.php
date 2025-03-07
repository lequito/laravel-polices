<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder{

    public function run(): void{
        
        $roles = ['admin', 'moderador', 'visitor'];
        $posts = [];

        $user_id = 1;

        foreach($roles as $role){
            $posts[] = [
                'user_id'    => $user_id++,
                'title'      => "Post do usuário $role",
                'content'    => "Conteúdo do post do usuário $role",
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('posts')->insert($posts);
    }
}
