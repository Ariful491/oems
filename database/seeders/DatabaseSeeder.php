<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::insert([
            array('id' => '1','name' => 'Ariful Hoque','role_id' => 'teacher','email' => 'admin@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$exDzR1w/H1yLLy6wQXTZWedV3O2MKWdYOMQ/DdbRGK7POvlhiwkz6','remember_token' => NULL,'created_at' => '2022-10-31 09:08:12','updated_at' => '2022-10-31 09:08:12'),
            array('id' => '2','name' => 'teacher','role_id' => 'teacher','email' => 'teacher@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$iRGztXtL8XG.fOxNWCmRO.SzVdamGyOoRw9bOBU0uk12qLfWvKpSa','remember_token' => NULL,'created_at' => '2022-10-31 09:40:14','updated_at' => '2022-10-31 09:40:14'),
            array('id' => '3','name' => 'student','role_id' => 'student','email' => 'student@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$fKT3PcZgYGe87QaPxd.Fbe5.FGziPyLC6gl4H2P.t5vcKN3w8tVi6','remember_token' => NULL,'created_at' => '2022-10-31 09:41:50','updated_at' => '2022-10-31 09:41:50')
        ]);
    }
}
