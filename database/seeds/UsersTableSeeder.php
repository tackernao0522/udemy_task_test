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
            'name' => 'あああ',
            'email' => 'test@test.com',
            'password' => Hash::make('ggz6kxp3'),
            ], [
                'name' => 'いいい',
                'email' => 'test2@test.com',
                'password' => Hash::make('ggz6kxp3'),
            ], [
                'name' => 'ううう',
                'email' => 'test3@test.com',
                'password' => Hash::make('ggz6kxp3'),
                ]
            ]);
        }
    }
