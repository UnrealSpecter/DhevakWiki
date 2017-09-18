<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Admin',
        'surname' => 'Admin',
        'email' => 'admin@admin.nl',
        'password' => bcrypt('Admin'),
    ]);

    DB::table('categories')->insert([
            'name' => 'TestCategory',
        ]);

      DB::table('pages')->insert([
          'category_id' => '1',
          'title' => 'Test blokje',
          'description' => 'Dit is een test tekst in het test blokje',
          'image' => 'test.jpg',
          'slug' => 'slug-text'
      ]);

      DB::table('pages')->insert([
          'category_id' => '1',
          'title' => 'Test blokje 2',
          'description' => 'Dit is een test tekst in het 2e test blokje',
          'image' => 'test.jpg',
          'slug' => 'test-slug'
      ]);
    }
}
