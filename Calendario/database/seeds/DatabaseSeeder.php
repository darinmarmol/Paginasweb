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
   Eloquent::unguard();

        $this->call(UsuarioSedder::class);
        // $this->call(UsersTableSeeder::class);
  		//      Eloquent::unguard();

        // $this->call('UserTableSeeder');
    }
}