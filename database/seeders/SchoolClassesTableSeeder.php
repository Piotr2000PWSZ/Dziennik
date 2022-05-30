<?php
namespace Database\Seeders;
use App\SchoolClass;
use Illuminate\Database\Seeder;

class SchoolClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            [
                'id' => 1,
                'name' => '1 klasa'
            ],
            [
                'id' => 2,
                'name' => '2 klasa'
            ],
            [
                'id' => 3,
                'name' => '3 klasa'
            ],
            [
                'id' => 4,
                'name' => '4 klasa'
            ],
            

        ];

        SchoolClass::insert($classes);
    }
}
