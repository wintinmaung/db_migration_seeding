<?php

use Illuminate\Database\Seeder;

class UserinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App/UserInfo', 10)->create();
    }
}
