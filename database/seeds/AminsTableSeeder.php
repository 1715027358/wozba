<?php

use Illuminate\Database\Seeder;

class AminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => '1715027358',
            'password' =>bcrypt('13307463245123qw'),
        ]);
    }
}
