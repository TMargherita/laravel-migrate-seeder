<?php

use App\Author;
use App\AuthorInfo;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AuthorsInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //seleziono tutti gli autori
        $authors = Author::all();
        //ciclo tutti gli autori, per ogni autore inserisco

        foreach($authors as $author) {
           
            if($author->info == null) {
                $newAuthorInfo = new AuthorInfo;
                $newAuthorInfo->author_id;
                $newAuthorInfo->nationality = $faker->country();
                $newAuthorInfo->bio = $faker->paragraph(5, true);
                if(rand(0,1) == 1) {
                    $newAuthorInfo->image = $faker->imageUrl(200, 300);
                    $newAuthorInfo->alive = 1;
                }
                $newAuthorInfo->save();
            }
        }
    }
}