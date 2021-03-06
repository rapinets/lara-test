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
       factory(\App\Models\User::class)->make([
           'name' => 'Rapinets Vasil',
           'email' => 'rapinecvasiliy@gmail.com'
       ])->save();

        factory(App\Models\User::class, 50)->create();
    }
}
