<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            $newComic = new Comic();

            // $newComic->title = $comic['title'];
            // $newComic->description = $comic['description'];
            // $newComic->thumb = $comic['thumb'];
            // $newComic->price = $comic['price'];
            // $newComic->series = $comic['series'];
            // $newComic->sale_date = $comic['sale_date'];
            // $newComic->type = $comic['type'];
            $newComic->fill($comic);
            $newComic->save();

            //Quando i nomi dei campi che dobbiamo inserire sono uguali a quelli delle tabelle a cui e' associato il model
            // possiamo direttamente passare un array associativo (vedi model associato!)
            //$fillable = [.........., ....., ......,]
        }

    }
}
