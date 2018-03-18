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
        DB::table('roles')->insert([
            'name' => 'Administrator'
        ]);
        DB::table('roles')->insert([
            'name' => 'Author'
        ]);
        DB::table('roles')->insert([
            'name' => 'Subscriber'
        ]);

    }
}
