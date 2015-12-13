<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin Role Permissions
        foreach(range(1, 8) as $index) {
            DB::table('permission_role')->insert([
                'permission_id' => $index,
                'role_id' => 1, 
                'created_at' => new \Carbon\Carbon(),
                'updated_at' => new \Carbon\Carbon(),
            ]);
        }

        //Client Role Permissions
        foreach(range(9, 29) as $index) {
            DB::table('permission_role')->insert([
                'permission_id' => $index,
                'role_id' => 2, 
                'created_at' => new \Carbon\Carbon(),
                'updated_at' => new \Carbon\Carbon(),
            ]);
        }
    }
}
