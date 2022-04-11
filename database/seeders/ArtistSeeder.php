<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Carbon\Carbon;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('artists')->insert([
            'id' => 1,
            'name' => 'Incubus',
            'description' => 'Incubus est un groupe de rock alternatif (auparavant Funk Metal et Nu-Metal jusqu\'a 1998) américain, originaire de Calabasas en Californie. Le groupe comprend actuellement (depuis 2003) Brandon Boyd (chants et djembé), Mike Einziger (guitare), Ben Kenney (basse), Jose Pasillas (batterie) et Chris Kilmore alias DJ Kilmore (platines).',
            'image' => 'incubus.jpg',
            'url_video' => 'https://youtu.be/WA_xjBaXor0',
            'album' => 'S.C.I.E.N.C.E. (1997–1998)
            Make Yourself (1999–2001)
            Morning View (2001–2004)
            Light Grenades (2005–2008)
            Pause et If Not Now, When? (2009–2013)
            Trust Fall (depuis 2014)
            8 (2017)',
            'category_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('artists')->insert([
            'id' => 2,
            'name' => 'Foo Fighters',
            'description' => "Foo Fighters est un groupe américain de hard rock, formé à Seattle, Washington. Il est formé en 1994 durant la dissolution de Nirvana, à la suite de la mort de son leader Kurt Cobain. Dave Grohl, le batteur du groupe, se lance alors dans son projet, un album intitulé Foo Fighters sur lequel il enregistre tous les instruments à l'exception de quelques titres enregistrés avec l'aide de Krist Novoselic, ancien bassiste de Nirvana, et Pat Smear, ancien guitariste live de ce même groupe et membre des Germs. ",
            'image' => 'foo-fighters.jpg',
            'url_video' => 'https://www.youtube.com/watch?v=1VQ_3sBZEm0',
            'album' => 'The Colour and the Shape
                There Is Nothing Left to Lose
                One by One
                In your Honor et Skin and Bones
                Echoes, Silence, Patience & Grace
                Wasting Light
                Sonic Highways
                Concrete and Gold
            ',
            'category_id' => 1,
        ]);
        
        DB::table('artists')->insert([
            'id' => 3,
            'name' => 'Igorrr',
            'description' => "Igorrr, de son vrai nom Gautier Serre, est un musicien compositeur producteur français mélangeant de nombreux genres musicaux, aussi disparates que le black metal, le death metal, la musique baroque, le breakcore, ou encore le trip hop1 pour en faire une œuvre unique. Gautier Serre fait également partie du groupe Corpo-Mente et précédemment Whourkr. Igorrr se produit sur scène sous forme d'un groupe composé de deux vocalistes, Aphrodite Patoulidou et JB Le Bail, ainsi que du batteur Sylvain Bouvier et du guitariste Martyn Clément. ",
            'image' => 'igorrr.png',
            'url_video' => 'https://www.youtube.com/watch?v=Osqf4oIK0E8',
            'album' => 'Poisson Soluble
                Moisissure
                Poisson Soluble
                BaroqueCore
                Nostril
                Hallelujah
                Maigre
                Savage Sinusoid
                Spirituality and Distortion
            ',
            'category_id' => 1,
        ]);

        DB::table('artists')->insert([
            'id' => 4,
            'name' => $faker->sentence(3, true),
            'description' => $faker->sentence(10, true),
            'image' => 'marcel.jpg',
            'url_video' => 'https://www.youtube.com/watch?v=Osqf4oIK0E8',
            'album' => 'Poisson Soluble
                Moisissure
                Poisson Soluble
                BaroqueCore
                Nostril
            ',
            'category_id' => 1,
        ]);

        DB::table('artists')->insert([
            'id' => 5,
            'name' => $faker->sentence(3, true),
            'description' => $faker->sentence(10, true),
            'image' => 'sia.jpeg',
            'url_video' => 'https://www.youtube.com/watch?v=Osqf4oIK0E8',
            'album' => 'Poisson Soluble
                Moisissure
                Poisson Soluble
                BaroqueCore
                Nostril
            ',
            'category_id' => 1,
        ]);

        DB::table('artists')->insert([
            'id' => 6,
            'name' => $faker->sentence(3, true),
            'description' => $faker->sentence(10, true),
            'image' => 'night-verses.jpg',
            'url_video' => 'https://www.youtube.com/watch?v=Osqf4oIK0E8',
            'album' => 'Poisson Soluble
                Moisissure
                Poisson Soluble
                BaroqueCore
                Nostril
            ',
            'category_id' => 1,
        ]);

        DB::table('artists')->insert([
            'id' => 7,
            'name' => $faker->sentence(3, true),
            'description' => $faker->sentence(10, true),
            'image' => 'white-stripes.jpg',
            'url_video' => 'https://www.youtube.com/watch?v=Osqf4oIK0E8',
            'album' => 'Poisson Soluble
                Moisissure
                Poisson Soluble
                BaroqueCore
                Nostril
            ',
            'category_id' => 1,
        ]);
    }
}
