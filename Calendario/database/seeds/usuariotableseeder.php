<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class usuariotableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	   DB::table('usuario')->insert([
            'uario' => 'admin',
            'email' => str_random(10).'@gmail.com',
            'nombre'=> 'Administrator',
            'password' => Hash::make('admin'), // Hash::make() nos va generar una cadena con 
            //'password' => bcrypt('secret'),
        ]);
        //
    }
}
