<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = 'comics';

    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type'];

}

  // $newComic->title = $comic['title'];
            // $newComic->description = $comic['description'];
            // $newComic->thumb = $comic['thumb'];
            // $newComic->price = $comic['price'];
            // $newComic->series = $comic['series'];
            // $newComic->sale_date = $comic['sale_date'];
            // $newComic->type = $comic['type'];


            //Quando i nomi dei campi che dobbiamo inserire sono uguali a quelli delle tabelle a cui e' associato il model
            // possiamo direttamente passare un array associativo VEDI SEEDER
            //$fillable = [.........., ....., ......,]
