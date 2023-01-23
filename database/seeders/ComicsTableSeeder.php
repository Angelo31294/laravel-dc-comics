<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comics;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('db');

        foreach($comics as $comic){

            $new_comics = new Comics();
            $new_comics->title = $comic['title'];
            $new_comics->description = $comic['description'];
            $new_comics->thumb = $comic['thumb'];
            $new_comics->price = $comic['price'];
            $new_comics->series = $comic['series'];
            $new_comics->date = $comic['sale_date'];
            $new_comics->type = $comic['type'];
            $new_comics->artist = $comic['artists'];
            $new_comics->writer = $comic['writers'];
            $new_comics->save();
        }
    }
}
