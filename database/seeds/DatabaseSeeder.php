<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('site')->insert([
            [
                'name' => 'Родина',
                'url'  => 'vkino.ua',
                'city' => '0'
            ]
        ]);
    }
}
