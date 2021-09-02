<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Models\balasKomen;
use App\Models\ImageArtikel;
use App\Models\Kategori;
use App\Models\Komentar;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        // user create
        User::create([
            'name' => 'admin',
            'email' => 'admindaiton2021@gmail.com',
            'password' => Hash::make('123123'),
            'role' => 'admin'
        ]);

        Kategori::create([
            'nama' => 'Corporate Coaching'
        ]);
        Kategori::create([
            'nama' => 'Coaching Academy'
        ]);
        Kategori::create([
            'nama' => 'Our Coaching'
        ]);

        $p = 1;
        for ($j = 1; $j < 5; $j++) {
            for ($i = 1; $i < 4; $i++) {
                Artikel::create([
                    'slug' => $faker->slug,
                    'kategori_id' => $i,
                    'user_id' => 1,
                    'title' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'thumbnail' => 'https://source.unsplash.com/random/300x200?sig=' . $p,
                    'body' => $faker->paragraph($nbSentences = 120, $variableNbSentences = true)
                ]);
                $p++;
            }
        }

        for ($i = 1; $i < 13; $i++) {
            for ($j = 1; $j < 3; $j++) {
                Komentar::create([
                    'nama' => $faker->name,
                    'email' => $faker->email,
                    'body' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
                    'artikel_id' => $i
                ]);
            }
        }

        for ($i = 1; $i < 13; $i++) {
            for ($j = 1; $j < 3; $j++) {
                ImageArtikel::create([
                    'artikel_id' => $i,
                    'image' => 'https://source.unsplash.com/random/100x100?sig=' . $p
                ]);
                $p++;
            }
        }
        $k = 1;
        for ($i = 1; $i < 13; $i++) {
            for ($j = 1; $j < 3; $j++) {
                balasKomen::create([
                    'user_id' => 1,
                    'komentar_id' => $k,
                    'body' => $faker->paragraph($nbSentences = 8, $variableNbSentences = true),
                ]);
            }
        }
        for ($i = 1; $i < 13; $i++) {
            for ($j = 1; $j < 3; $j++) {
                Reply::create([
                    'user_id' => 1,
                    'komentar_id' => $k,
                    'body' => $faker->paragraph($nbSentences = 8, $variableNbSentences = true),
                ]);

                $k++;
            }
        }
    }
}
