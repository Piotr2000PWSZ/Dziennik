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
                'name' => '1 klasa',
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
            [
                'id' => 5,
                'name' => '5 klasa'
            ],
            [
                'id' => 6,
                'name' => '6 klasa'
            ],
            [
                'id' => 7,
                'name' => '7 klasa'
            ],
            [
                'id' => 8,
                'name' => '8 klasa'
            ],
            

        ];

        SchoolClass::insert($classes);
    }
}
