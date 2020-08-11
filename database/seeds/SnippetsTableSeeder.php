<?php

use Illuminate\Database\Seeder;
use App\Snippet;
use Faker\Factory as Faker;


class SnippetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Snippet::class,10)->create();
    }
}
