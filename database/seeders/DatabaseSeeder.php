<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            PrzedmiotyTableSeeder::class,
            SchoolClassesTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            LessonsTableSeeder::class,
            
        ]);
    }
}
