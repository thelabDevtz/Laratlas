<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class LaratlasTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys("regions");
        $this->delete('regions');
        DB::table('regions')->insert(array(
            array(
              'id'          => 1,
              'region_name' => 'Arusha',
              'latitude'    => -3.386925,
              'longitude'   => 36.682995
             ),
            array(
              'id'           => 2,
              'region_name'  => 'Dar es Salaam',
              'latitude'     => -6.802353,
              'longitude'    => 39.279556
            ),
            array(
              'id'           => 3,
              'region_name'  => 'Dodoma',
              'latitude'     => -6.161184,
              'longitude'    => 35.745426
            ),
            array(
              'id'          => 4,
              'region_name' => 'Geita',
              'latitude'    => -2.86667,
              'longitude'   => 32.16667
             ),
            array(
              'id'          => 5,
              'region_name' => 'Iringa',
              'latitude'    => -7.773094,
              'longitude'   => 35.699120
            ),
            array(
              'id'          => 6,
              'region_name' => 'Kagera',
              'latitude'    => -2.375112,
              'longitude'   => 31.262637
            ),
            array(
              'id'          => 7,
              'region_name' => 'Katavi',
              'latitude'    => -19.572505,
              'longitude'   => -65.761871
            ),
            array(
              'id'          => 8,
              'region_name' => 'Kigoma',
              'latitude'    => -4.893941,
              'longitude'   => 29.673386
            ),
            array(
              'id'          => 9,
              'region_name' => 'Kilimanjaro',
              'latitude'    => -3.067425,
              'longitude'   => 37.355627
            ),
            array(
              'id'          => 10,
              'region_name' => 'Lindi',
              'latitude'    => -9.987608,
              'longitude'   => 39.698248
            ),
            array(
              'id'          => 11,
              'region_name' => 'Manyara',
              'latitude'    => -4.315006,
              'longitude'   => 36.954107
            ),
            array(
              'id'          => 12,
              'region_name' => 'Mara',
              'latitude'    => -1.7753538,
              'longitude'   => 34.1531947
            ),
            array(
              'id'          => 13,
              'region_name' => 'Mbeya',
              'latitude'    => -8.909401,
              'longitude'   => 33.460773
            ),
            array(
              'id'          => 14,
              'region_name' => 'Morogoro',
              'latitude'    => -6.830373,
              'longitude'   => 37.670589
            ),
            array(
              'id'          => 15,
              'region_name' => 'Mtwara',
              'latitude'    => -10.311224,
              'longitude'   => 40.175981
            ),
            array(
              'id'          => 16,
              'region_name' => 'Mwanza',
              'latitude'    => -15.609150,
              'longitude'   => 34.522820
            ),
            array(
              'id'          => 17,
              'region_name' => 'Njombe',
              'latitude'    =>  -8.914753,
              'longitude'   => 34.685651
            ),
            array(
              'id'          => 18,
              'region_name' => 'Pemba kaskazini',
              'latitude'    => -5.031935,
              'longitude'   => 39.775557
            ),
            array(
              'id'          => 19,
              'region_name' => 'Pemba Kusini',
              'latitude'    => -5.314696,
              'longitude'   => 39.754951
            ),
            array(
              'id'          => 20,
              'region_name' => 'Pwani',
              'latitude'    => -7.323771,
              'longitude'   => 38.820545
            ),
            array(
              'id'          => 21,
              'region_name' => 'Rukwa',
              'latitude'    => -6.965368,
              'longitude'   => 31.262637
            ),
            array(
              'id'          => 22,
              'region_name' => 'Ruvuma',
              'latitude'    => -10.687872,
              'longitude'   => 36.263085
            ),
            array(
              'id'          => 23,
              'region_name' => 'Shinyanga',
              'latitude'    => -3.680996,
              'longitude'   => 33.427140
            ),
            array(
              'id'          => 24,
              'region_name' => 'Simiyu',
              'latitude'    => -2.535588,
              'longitude'   => 33.420472
           ),
            array(
              'id'          => 25,
              'region_name' => 'Singida',
              'latitude'    => -4.825352,
              'longitude'   => 34.763031
            ),
            array(
              'id'          => 26,
              'region_name' => 'Tabora',
              'latitude'    => -5.042495,
              'longitude'   => 32.819733
            ),
            array(
              'id'          => 27,
              'region_name' => 'Tanga',
              'latitude'    => -5.088875,
              'longitude'   => 39.102323
            ),
            array(
              'id'          => 28,
              'region_name' => 'Unguja kaskazini',
              'latitude'    => -5.939509,
              'longitude'   => 39.279101
             ),
            array(
              'id'          => 29,
              'region_name' => 'Songwe',
              'latitude'    => 	-9.7000,
              'longitude'   => 	33.9333
            ),
            array(
              'id'          => 30,
              'region_name' => 'Unguja kusini',
              'latitude'    => -6.203656,
              'longitude'   => 39.362120
            ),
            array(
              'id'          => 31,
              'region_name' => 'Unguja Mjini Magharibi',
              'latitude'    => -6.229814,
              'longitude'   => 39.258329
            )
        ));
        $this->enableForeignKeys("regions");
    }
}
