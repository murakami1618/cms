<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
              'item_name' => 'ブック１',
              'item_number' => 1,
              'item_amount' => 1,
              'publihed' => '2019-01-01 00:00:00',
            ],
            [
                'item_name' => 'ブック2',
                'item_number' => 2,
                'item_amount' => 20,
                'publihed' => '2019-01-01 00:00:00',
              ],
              [
                'item_name' => 'ブック3',
                'item_number' => 3,
                'item_amount' => 300,
                'publihed' => '2019-01-01 00:00:00',
              ],
              [
                'item_name' => 'ブック4',
                'item_number' => 4,
                'item_amount' => 4000,
                'publihed' => '2019-01-01 00:00:00',
              ],
          ]); 
    }
}
