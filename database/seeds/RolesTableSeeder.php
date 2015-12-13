<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('roles')->delete();
    	
        DB::table('roles')->insert([
            [
                'role_title' => 'Default',
                'role_slug' => 'default', 
                'description'=>'Acceso a la configuracion interna de usuarios',
                'created_at' => new \Carbon\Carbon(),
                'updated_at' => new \Carbon\Carbon(),
            ],
		    [
		    	'role_title' => 'Administrador',
		    	'role_slug' => 'administrador', 
		    	'description'=>'Acceso a los modulos y configuracion del sistema',
            	'created_at' => new \Carbon\Carbon(),
            	'updated_at' => new \Carbon\Carbon(),
	    	],
            [
                'role_title' => 'Gerente',
                'role_slug' => 'gerente', 
                'description'=>'',
                'created_at' => new \Carbon\Carbon(),
                'updated_at' => new \Carbon\Carbon(),
            ],
            [
                'role_title' => 'Analista',
                'role_slug' => 'analista', 
                'description'=>'',
                'created_at' => new \Carbon\Carbon(),
                'updated_at' => new \Carbon\Carbon(),
            ],
            [
                'role_title' => 'Preventista',
                'role_slug' => 'preventista', 
                'description'=>'',
                'created_at' => new \Carbon\Carbon(),
                'updated_at' => new \Carbon\Carbon(),
            ],
            [
                'role_title' => 'Cliente',
                'role_slug' => 'cliente', 
                'description'=>'',
                'created_at' => new \Carbon\Carbon(),
                'updated_at' => new \Carbon\Carbon(),
            ],
    	]);
    }
}
