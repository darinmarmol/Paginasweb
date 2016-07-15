<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/**
    	 usuario::create(array(
            'uario'  => 'admin',
            'email'     => 'admin@admin.com',
            'nombre'=> 'Administrator',
            'password' => Hash::make('admin') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
        **/
        DB::table('usuario')->insert([
            'uario' => 'admin',
            'email' => str_random(10).'@gmail.com',
            'nombre'=> 'Administrator',
            'password' => Hash::make('admin'), // Hash::make() nos va generar una cadena con 
            //'password' => bcrypt('secret'),
        ]);
        // $this->call(UsersTableSeeder::class);
  		//      Eloquent::unguard();

        // $this->call('UserTableSeeder');
    }
}