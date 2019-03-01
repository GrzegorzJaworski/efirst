<?php

use App\Page;
use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = factory(Tag::class, 5)->create();

        $pages = Page::all();

        $pages->each(function ($page) use ($tags) {
            $page->tags()->attach($tags->random(rand(1,3)));
        });
    }
}
