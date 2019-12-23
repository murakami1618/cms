<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('books')->insert([
            [
              'item_name' => '本',
              'item_number' => 1,
              'item_amount' => 1,
              'published' => '2019-01-01 00:00:00',
              'user_id' => '3',
            ],
            [
                'item_name' => 'お菓子',
                'item_number' => 2,
                'item_amount' => 20,
                'publsihed' => '2019-01-01 00:00:00',
                'user_id' => '3',
              ],
              [
                'item_name' => 'ジュース',
                'item_number' => 2,
                'item_amount' => 300,
                'publsihed' => '2019-01-01 00:00:00',
                'user_id' => '1',
              ],
              [
                'item_name' => 'りんご',
                'item_number' => 4,
                'item_amount' => 40,
                'publsihed' => '2019-01-01 00:00:00',
                'user_id' => '1',
              ],
              [
                'item_name' => '鍋',
                'item_number' => 1,
                'item_amount' => 4000,
                'publsihed' => '2019-01-01 00:00:00',
                'user_id' => '1',
              ],
              [
                'item_name' => 'フライパン',
                'item_number' => 1,
                'item_amount' => 4000,
                'publsihed' => '2019-01-01 00:00:00',
                'user_id' => '1',
              ],
              [
                'item_name' => 'ボール',
                'item_number' => 3,
                'item_amount' => 100,
                'publsihed' => '2019-01-01 00:00:00',
                'user_id' => '1',
              ],
              [
                'item_name' => 'ケチャップ',
                'item_number' => 1,
                'item_amount' => 200,
                'publsihed' => '2019-01-01 00:00:00',
                'user_id' => '1',
              ],
              [
                'item_name' => 'お肉',
                'item_number' => 5,
                'item_amount' => 600,
                'publsihed' => '2019-01-01 00:00:00',
                'user_id' => '1',
              ],
              [
                'item_name' => 'しめじ',
                'item_number' => 2,
                'item_amount' => 400,
                'publsihed' => '2019-01-01 00:00:00',
                'user_id' => '1',
              ],
          ]); 
    }
}
