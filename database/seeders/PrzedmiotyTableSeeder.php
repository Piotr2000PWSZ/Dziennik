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
            ],
            [
                'id'    => 2,
                'nazwa' => 'Matematyka',
            ],
            [
                'id'    => 3,
                'nazwa' => 'Język angielski',
            ],
            [
                'id'    => 4,
                'nazwa' => 'Język niemiecki',
            ],
            [
                'id'    => 5,
                'nazwa' => 'Biologia',
            ],
            [
                'id'    => 6,
                'nazwa' => 'Muzyka',
            ],
            [
                'id'    => 7,
                'nazwa' => 'Technika',
            ],
            [
                'id'    => 8,
                'nazwa' => 'Plastyka',
            ],
            [
                'id'    => 9,
                'nazwa' => 'WF',
            ],
            [
                'id'    => 10,
                'nazwa' => 'Informatyka',
            ],
            [
                'id'    => 11,
                'nazwa' => 'Religia',
            ],
            [
                'id'    => 12,
                'nazwa' => 'Zajęcia wychowawcze',
            ],
            [
                'id'    => 13,
                'nazwa' => 'Geografia',
            ],
        ];

        Przedmioty::insert($przedmioty);
    }
}
