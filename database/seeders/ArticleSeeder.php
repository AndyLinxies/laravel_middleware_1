<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'titre' => 'Article 1',
                'texte'=> 'Texte de l\'article 1',
                'user_id'=> 1,
            ]
        ]);
    }
}
