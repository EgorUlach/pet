<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roleAdmin = ["name"=>"admin"];

        Role::firstOrCreate([
            "name" => $roleAdmin["name"]
        ], $roleAdmin);

        $userAdmin = [
          "name" => 'admin',
          "email" => 'admin@gmail.com',
          "password" => Hash::make('password'),
          "role_id" => Role::where("name","admin")->first()->id,
        ];

        $user = User::firstOrCreate([
            'email' => $userAdmin['email'],
        ],$userAdmin);

        $user->profile()->create([
            "name" => "egor",
            "phone" => "111111111",
            "address" => "test address",
            "gender" => true,
        ]);

        $this->call([
            RoleSeeder::class,
            TagSeeder::class,
            CategorySeeder::class,
            UserSeeder::class,
            ProfileSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
