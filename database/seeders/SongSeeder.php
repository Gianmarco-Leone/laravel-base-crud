<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Song;

use Faker\Generator as Faker;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $song = new Song;

        $song->title = 'Good Riddance';
        $song->album = 'Nimrod';
        $song->author = 'Billie Joe Armstrong';
        $song->length = 2.32;
        $song->poster = 'https://upload.wikimedia.org/wikipedia/en/1/13/Green_Day_-_Good_Riddance_%28Time_of_Your_Life%29_cover.jpg';

        $song->save();

        $song = new Song;

        $song->title = 'Fast Car';
        $song->album = 'Tracy Chapman';
        $song->author = 'Tracy Chapman';
        $song->editor = 'Tracy Chapman';
        $song->length = 4.55;
        $song->poster = 'https://upload.wikimedia.org/wikipedia/en/3/30/Fastcar_tchapman.jpg';

        $song->save();

        $song = new Song;

        $song->title = 'Back In Black';
        $song->album = 'Back In Black';
        $song->author = 'AC/DC';
        $song->editor = 'Albert Productions';
        $song->length = 4.15;
        $song->poster = 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/41kj36cVMFL._AC_SX425_.jpg';

        $song->save();

        for($i = 0; $i < 50; $i++) {
            $song = new Song;

            $song->title = $faker->word();
            $song->album = $faker->word();
            $song->author = $faker->firstName(null);
            $song->editor = $faker->company() ;
            $song->length = $faker->randomFloat(2, 1, 120);
            $song->poster = 'https://picsum.photos/150/150';
    
            $song->save();
        }
    }
}