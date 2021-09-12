<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "admin",
                "email" => "admin@admin.com",
                "password" => Hash::make("admin@admin.com"),
                "role_id"=>1
            ],
            [
                "name" => "membre",
                "email" => "membre@membre.com",
                "password" => Hash::make("membre@membre.com"),
                "role_id"=>2
            ],
            [
                "name" => "webmaster",
                "email" => "webmaster@webmaster.com",
                "password" => Hash::make("webmaster@webmaster.com"),
                "role_id"=>3
            ],
            [
                "name" => "redacteur",
                "email" => "redacteur@redacteur.com",
                "password" => Hash::make("redacteur@redacteur.com"),
                "role_id"=>4
            ],
        ]);
    }
}
