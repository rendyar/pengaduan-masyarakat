<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    User,
    Masyarakat,
    Petugas
};

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = collect([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'roles' => 'admin',
            ],
            [
                'name' => 'Petugas',
                'email' => 'petugas@gmail.com',
                'roles' => 'petugas',
            ],
        ]);

        $data->map(function ($data) {
            $name = $data['name'];
            $email = $data['email'];
            $roles = $data['roles'];
            $email_verified_at = now();
            $password = bcrypt('000000');

            $user = User::query()->updateOrCreate(compact('name', 'email', 'email_verified_at', 'roles', 'password'), compact('name', 'email', 'email_verified_at', 'roles', 'password'));
            $user->syncRoles($user->role);
        });
    }
}
