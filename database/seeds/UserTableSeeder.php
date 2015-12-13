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
		    	'name' => 'Administrador',
		    	'email'=>'email1@caragua.com',
		    	'username'=>'carbonera_admin',
		    	'phone'=>'02431231231',
		    	'password'=>bcrypt('carbonera_admin'),
		    	'remember_token'=>str_random(10),
		    	'active'=>1,
		    	'created_at' => new \Carbon\Carbon(),
            	'updated_at' => new \Carbon\Carbon(),
	    	],
		    [	
		    	'name' => 'Prev - 1',
		    	'email'=>'email2@caragua.com',
		    	'username'=>'preventista1',
		    	'phone'=>'04244564564',
		    	'password'=>bcrypt('preventista1'),
		    	'remember_token'=>str_random(10),
		    	'active'=>1,
		    	'created_at' => new \Carbon\Carbon(),
            	'updated_at' => new \Carbon\Carbon(),
	    	],
		    [	
		    	'name' => 'Supermercados Mayor',
		    	'email'=>'mjcrsis22@gmail.com',
		    	'username'=>'supermayor',
		    	'phone'=>'04267897899',
		    	'password'=>bcrypt('supermayor'),
		    	'remember_token'=>str_random(10),
		    	'active'=>1,
		    	'created_at' => new \Carbon\Carbon(),
            	'updated_at' => new \Carbon\Carbon(),
	    	],
    	]);
    }
}
