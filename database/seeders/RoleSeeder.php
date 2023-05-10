<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = [
            ['name' => 'Admin','guard_name' => 'web'],
            ['name' => 'Staff','guard_name' => 'web'],
        ];

        foreach($role_user as $role => $r){
            DB::table('roles')->insert([
                'name' => $r['name'],
                'guard_name' => $r['guard_name'],
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
            ]);
        }
    }
}
