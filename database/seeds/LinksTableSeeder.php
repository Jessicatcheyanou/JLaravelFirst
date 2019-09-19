<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //In order to “activate” the LinksTableSeeder, we need to call it from the main database/seeds/DatabaseSeeder.php run method:
        
        factory(App\Link::class, 5)->create();
    }
}
