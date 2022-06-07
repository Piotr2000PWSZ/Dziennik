<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Przedmioty;
class PrzedmiotyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $przedmioty = [
            [
                'id'    => 1,
                'nazwa' => 'Język polski',
                'temat' => 'Wprowadzenie do pisania',
            ],
            [
                'id'    => 2,
                'nazwa' => 'Język polski',
                'temat' => 'Pan Tadeusz',
            ],
            [
                'id'    => 3,
                'nazwa' => 'Język polski',
                'temat' => 'TEMAT',
            ],
            [
                'id'    => 4,
                'nazwa' => 'Język polski',
                'temat' => 'TEMAT',
            ],
            [
                'id'    => 5,
                'nazwa' => 'Język polski',
                'temat' => 'TEMAT',
            ],
            [
                'id'    => 6,
                'nazwa' => 'Język polski',
                'temat' => 'TEMAT',
            ],
            [
                'id'    => 7,
                'nazwa' => 'Język polski',
                'temat' => 'TEMAT',
            ],
            [
                'id'    => 8,
                'nazwa' => 'Język polski',
                'temat' => 'TEMAT',
            ],
            [
                'id'    => 9,
                'nazwa' => 'Język polski',
                'temat' => 'TEMAT',
            ],
            [
                'id'    => 10,
                'nazwa' => 'Matematyka',
                'temat' => 'TEMAT',
            ],
            [
                'id'    => 11,
                'nazwa' => 'Matematyka',
                'temat' => 'TEMAT',
            ],
            [
                'id'    => 12,
                'nazwa' => 'Matematyka',
                'temat' => 'TEMAT',
            ],
            [
                'id'    => 13,
                'nazwa' => 'Matematyka',
                'temat' => 'TEMAT',
            ],
            [
                'id'    => 14,
                'nazwa' => 'Język angielski',
                'temat' => 'TEMAT',
            ],
            [
                'id'    => 15,
                'nazwa' => 'Język angielski',
                'temat' => 'TEMAT',
            ],
            [
                'id'    => 16,
                'nazwa' => 'Język angielski',
                'temat' => 'TEMAT',
            ],
        ];

        Przedmioty::insert($przedmioty);
    }
}
