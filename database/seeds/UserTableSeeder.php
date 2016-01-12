<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
		    	'username'=>'carbonera_admin',
		    	'password'=>bcrypt('carbonera_admin'),
		    	'name' => 'Administrador',
		    	'last' => '.',
		    	'ci' => '.',
		    	'email'=>'email1@caragua.com',
		    	'phone'=>'02431231231',
		    	'active'=>1,
		    	'remember_token'=>str_random(10),
		    	'created_at' => new \Carbon\Carbon(),
            	'updated_at' => new \Carbon\Carbon(),
	    	],
		    [
		    	'username'=>'preventista1',
		    	'password'=>bcrypt('preventista1'),
		    	'name' => 'Prev - 1',
		    	'last' => '.',
		    	'ci' => '.',
		    	'email'=>'email2@caragua.com',
		    	'phone'=>'04244564564',
		    	'active'=>1,
		    	'remember_token'=>str_random(10),
		    	'created_at' => new \Carbon\Carbon(),
            	'updated_at' => new \Carbon\Carbon(),
	    	],
		    [
		    	'username'=>'supermayor',
		    	'password'=>bcrypt('supermayor'),
		    	'name' => 'Supermercados Mayor',
		    	'last' => '.',
		    	'ci' => '.',
		    	'email'=>'mjcrsis22@gmail.com',
		    	'phone'=>'04267897899',
		    	'active'=>1,
		    	'remember_token'=>str_random(10),
		    	'created_at' => new \Carbon\Carbon(),
            	'updated_at' => new \Carbon\Carbon(),
	    	],
    	]);
    }
}
