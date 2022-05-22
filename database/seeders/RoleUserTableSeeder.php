<?php



use App\Role;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    public function run()
    {
        Role::findOrFail(1)->rolesUsers()->sync(1);
        Role::findOrFail(3)->rolesUsers()->sync([2, 3, 4, 5, 6]);
        Role::findOrFail(4)->rolesUsers()->sync([7,8,9,10,11,12,13,14]);
        Role::findOrFail(5)->rolesUsers()->sync([15,16,17]);
    }
}
