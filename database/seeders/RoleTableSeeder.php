<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = collect([
            'admin',
            'petugas',
            'masyarakat'
        ]);

        $roles->map(function ($role) {
            $name = $role;
            $guard_name = 'web';

            Role::query()->updateOrCreate(compact('name'), compact('name', 'guard_name'));
        });
    }
}
