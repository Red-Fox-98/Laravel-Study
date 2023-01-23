<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\File;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Session;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()->create(['name' => 'admin']);
        Role::factory()->create(['name' => 'player']);

        $this->call(UserSeeder::class);



//        User::factory()->create(
//            [
//                'email' => 'user1@mail.com',
//                'password' => bcrypt('password')
//            ]
//        )->assignRole(Role::PLAYER);
//
//        User::factory()->create(
//            [
//                'email' => 'user2@mail.com',
//                'password' => bcrypt('password')
//            ]
//        )->assignRole(Role::PLAYER);
//
//        User::factory()->create(
//            [
//                'email' => 'user3@mail.com',
//                'password' => bcrypt('password')
//            ]
//        )->assignRole(Role::PLAYER);
//
//        User::factory()->create(
//            [
//                'email' => 'user4@mail.com',
//                'password' => bcrypt('password')
//            ]
//        )->assignRole(Role::PLAYER);
//
//        User::factory()->create(
//            [
//                'email' => 'user5@mail.com',
//                'password' => bcrypt('password')
//            ]
//        )->assignRole(Role::PLAYER);
    }
}
