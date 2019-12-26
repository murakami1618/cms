<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
              'name' => 'ポッポ',
              'email' => 'email@email.com',
              'password' => 'secret',
            ],
            [
                'name' => 'Englishさん',
                'email' => 'email@email.com',
                'password' => 'secret',
              ],
              [
                'name' => 'カタカナさん',
                'email' => 'email@email.com',
                'password' => 'secret',
              ],
              [
                'name' => '漢字さん',
                'email' => 'email@email.com',
                'password' => 'secret',
              ],
          ]); 

    }
}
