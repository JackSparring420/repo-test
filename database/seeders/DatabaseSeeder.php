<?php

use Illuminate\Database\Seeder;
use Database\Seeders\SongSeeder;
use App\Models\Song;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SongSeeder::class,
        //     // AlbumSeeder::class,
        //     // ArtistSeeder::class
            
        ]);
        // Song::factory(10)->create();
    }
}
