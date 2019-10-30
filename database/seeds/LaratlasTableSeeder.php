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
        //creating regions
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
              'region_name' => 'Kusini Pemba Region of Zanzibar',
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
              'region_name' => 'Kusini Unguja Region of Zanzibar',
              'latitude'    => -6.203656,
              'longitude'   => 39.362120
            ),
            array(
              'id'          => 31,
              'region_name' => 'Mjini Magharibi Region of Zanzibar',
              'latitude'    => -6.229814,
              'longitude'   => 39.258329
            )
        ));
        $this->enableForeignKeys("regions");


        //creating districts
        $this->disableForeignKeys('districts');
        $this->delete('districts');
        DB::table('districts')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'region_id' => 1,
                    'name' => 'Meru District Council',
                ),
            1 =>
                array(
                    'id' => 2,
                    'region_id' => 1,
                    'name' => 'Arusha City Council ',
                ),
            2 =>
                array(
                    'id' => 3,
                    'region_id' => 1,
                    'name' => 'Arusha District Council',
                ),
            3 =>
                array(
                    'id' => 4,
                    'region_id' => 1,
                    'name' => 'Karatu District Council ',
                ),
            4 =>
                array(
                    'id' => 5,
                    'region_id' => 1,
                    'name' => 'Longido District Council ',
                ),
            5 =>
                array(
                    'id' => 6,
                    'region_id' => 1,
                    'name' => 'Monduli District Council ',
                ),
            6 =>
                array(
                    'id' => 7,
                    'region_id' => 1,
                    'name' => 'Ngorongoro District Council',
                ),
            7 =>
                array(
                    'id' => 8,
                    'region_id' => 2,
                    'name' => 'Ilala Municipal Council',
                ),
            8 =>
                array(
                    'id' => 9,
                    'region_id' => 2,
                    'name' => 'Kinondoni Municipal Council',
                ),
            9 =>
                array(
                    'id' => 10,
                    'region_id' => 2,
                    'name' => 'Temeke Municipal Council',
                ),
            10 =>
                array(
                    'id' => 11,
                    'region_id' => 2,
                    'name' => 'Kigamboni Municipal Council',
                ),
            11 =>
                array(
                    'id' => 12,
                    'region_id' => 2,
                    'name' => 'Ubungo Municipal Council',
                ),
            12 =>
                array(
                    'id' => 13,
                    'region_id' => 3,
                    'name' => 'Bahi District Council',
                ),
            13 =>
                array(
                    'id' => 14,
                    'region_id' => 3,
                    'name' => 'Chamwino District Council',
                ),
            14 =>
                array(
                    'id' => 15,
                    'region_id' => 3,
                    'name' => 'Chemba District Council',
                ),
            15 =>
                array(
                    'id' => 16,
                    'region_id' => 3,
                    'name' => 'Dodoma Municipal Council',
                ),
            16 =>
                array(
                    'id' => 17,
                    'region_id' => 3,
                    'name' => 'Kondoa District Council',
                ),
            17 =>
                array(
                    'id' => 18,
                    'region_id' => 3,
                    'name' => 'Kongwa District Council',
                ),
            18 =>
                array(
                    'id' => 19,
                    'region_id' => 3,
                    'name' => 'Mpwapwa District Council',
                ),
            19 =>
                array(
                    'id' => 20,
                    'region_id' => 4,
                    'name' => 'Bukombe District Council',
                ),
            20 =>
                array(
                    'id' => 21,
                    'region_id' => 4,
                    'name' => 'Chato District Council',
                ),
            21 =>
                array(
                    'id' => 22,
                    'region_id' => 4,
                    'name' => 'Geita Town Council & Geita District Council',
                ),
            22 =>
                array(
                    'id' => 23,
                    'region_id' => 4,
                    'name' => 'Mbogwe District Council',
                ),
            23 =>
                array(
                    'id' => 24,
                    'region_id' => 4,
                    'name' => 'Nyang\'hwale District Council',
                ),
            24 =>
                array(
                    'id' => 25,
                    'region_id' => 5,
                    'name' => 'Iringa District Council',
                ),
            25 =>
                array(
                    'id' => 26,
                    'region_id' => 5,
                    'name' => 'Iringa Municipal Council',
                ),
            26 =>
                array(
                    'id' => 27,
                    'region_id' => 5,
                    'name' => 'Kilolo District Council',
                ),
            27 =>
                array(
                    'id' => 28,
                    'region_id' => 5,
                    'name' => 'Mafinga Town Council',
                ),
            28 =>
                array(
                    'id' => 29,
                    'region_id' => 5,
                    'name' => 'Mufindi District Council',
                ),
            29 =>
                array(
                    'id' => 30,
                    'region_id' => 6,
                    'name' => 'Biharamulo District Council',
                ),
            30 =>
                array(
                    'id' => 31,
                    'region_id' => 6,
                    'name' => 'Bukoba District Council',
                ),
            31 =>
                array(
                    'id' => 32,
                    'region_id' => 6,
                    'name' => 'Bukoba Municipal Council',
                ),
            32 =>
                array(
                    'id' => 33,
                    'region_id' => 6,
                    'name' => 'Karagwe District Council',
                ),
            33 =>
                array(
                    'id' => 34,
                    'region_id' => 6,
                    'name' => 'Kyerwa District Council',
                ),
            34 =>
                array(
                    'id' => 35,
                    'region_id' => 6,
                    'name' => 'Missenyi District Council',
                ),
            35 =>
                array(
                    'id' => 36,
                    'region_id' => 6,
                    'name' => 'Muleba District Council',
                ),
            36 =>
                array(
                    'id' => 37,
                    'region_id' => 6,
                    'name' => 'Ngara District Council',
                ),
            37 =>
                array(
                    'id' => 38,
                    'region_id' => 7,
                    'name' => 'Mlele District Council',
                ),
            38 =>
                array(
                    'id' => 39,
                    'region_id' => 7,
                    'name' => 'Mpanda District Council',
                ),
            39 =>
                array(
                    'id' => 40,
                    'region_id' => 7,
                    'name' => 'Mpanda Town Council',
                ),
            40 =>
                array(
                    'id' => 41,
                    'region_id' => 8,
                    'name' => 'Buhigwe District Council',
                ),
            41 =>
                array(
                    'id' => 42,
                    'region_id' => 8,
                    'name' => 'Kakonko District Council',
                ),
            42 =>
                array(
                    'id' => 43,
                    'region_id' => 8,
                    'name' => 'Kasulu District Council',
                ),
            43 =>
                array(
                    'id' => 44,
                    'region_id' => 8,
                    'name' => 'Kasulu Town Council',
                ),
            44 =>
                array(
                    'id' => 45,
                    'region_id' => 8,
                    'name' => 'Kibondo District Council',
                ),
            45 =>
                array(
                    'id' => 46,
                    'region_id' => 8,
                    'name' => 'Kigoma District Council',
                ),
            46 =>
                array(
                    'id' => 47,
                    'region_id' => 8,
                    'name' => 'Kigoma-Ujiji Municipal Council',
                ),
            47 =>
                array(
                    'id' => 48,
                    'region_id' => 8,
                    'name' => 'Uvinza District Council',
                ),
            48 =>
                array(
                    'id' => 49,
                    'region_id' => 9,
                    'name' => 'Hai District Council',
                ),
            49 =>
                array(
                    'id' => 50,
                    'region_id' => 9,
                    'name' => 'Moshi District Council',
                ),
            50 =>
                array(
                    'id' => 51,
                    'region_id' => 9,
                    'name' => 'Moshi Municipal Council',
                ),
            51 =>
                array(
                    'id' => 52,
                    'region_id' => 9,
                    'name' => 'Mwanga District Council',
                ),
            52 =>
                array(
                    'id' => 53,
                    'region_id' => 9,
                    'name' => 'Rombo District Council',
                ),
            53 =>
                array(
                    'id' => 54,
                    'region_id' => 9,
                    'name' => 'Same District Council',
                ),
            54 =>
                array(
                    'id' => 55,
                    'region_id' => 9,
                    'name' => 'Siha District Council',
                ),
            55 =>
                array(
                    'id' => 56,
                    'region_id' => 10,
                    'name' => 'Kilwa District Council',
                ),
            56 =>
                array(
                    'id' => 57,
                    'region_id' => 10,
                    'name' => 'Lindi District Council',
                ),
            57 =>
                array(
                    'id' => 58,
                    'region_id' => 10,
                    'name' => 'Lindi Municipal Council',
                ),
            58 =>
                array(
                    'id' => 59,
                    'region_id' => 10,
                    'name' => 'Liwale District Council',
                ),
            59 =>
                array(
                    'id' => 60,
                    'region_id' => 10,
                    'name' => 'Nachingwea District Council',
                ),
            60 =>
                array(
                    'id' => 61,
                    'region_id' => 10,
                    'name' => 'Ruangwa District Council',
                ),
            61 =>
                array(
                    'id' => 62,
                    'region_id' => 11,
                    'name' => 'Babati Town Council',
                ),
            62 =>
                array(
                    'id' => 63,
                    'region_id' => 11,
                    'name' => 'Babati District Council',
                ),
            63 =>
                array(
                    'id' => 64,
                    'region_id' => 11,
                    'name' => 'Hanang District Council',
                ),
            64 =>
                array(
                    'id' => 65,
                    'region_id' => 11,
                    'name' => 'Kiteto District Council',
                ),
            65 =>
                array(
                    'id' => 66,
                    'region_id' => 11,
                    'name' => 'Mbulu District Council',
                ),
            66 =>
                array(
                    'id' => 67,
                    'region_id' => 11,
                    'name' => 'Simanjiro District Council',
                ),
            67 =>
                array(
                    'id' => 68,
                    'region_id' => 12,
                    'name' => 'Bunda District Council',
                ),
            68 =>
                array(
                    'id' => 69,
                    'region_id' => 12,
                    'name' => 'Butiama District Council',
                ),
            69 =>
                array(
                    'id' => 70,
                    'region_id' => 12,
                    'name' => 'Musoma District Council',
                ),
            70 =>
                array(
                    'id' => 71,
                    'region_id' => 12,
                    'name' => 'Musoma Municipal Council',
                ),
            71 =>
                array(
                    'id' => 72,
                    'region_id' => 12,
                    'name' => 'Rorya District Council',
                ),
            72 =>
                array(
                    'id' => 73,
                    'region_id' => 12,
                    'name' => 'Serengeti District Council',
                ),
            73 =>
                array(
                    'id' => 74,
                    'region_id' => 12,
                    'name' => 'Tarime District Council',
                ),
            74 =>
                array(
                    'id' => 75,
                    'region_id' => 13,
                    'name' => 'Busokelo District Council',
                ),
            75 =>
                array(
                    'id' => 76,
                    'region_id' => 13,
                    'name' => 'Chunya District Council',
                ),
            76 =>
                array(
                    'id' => 77,
                    'region_id' => 13,
                    'name' => 'Kyela District Council',
                ),
            77 =>
                array(
                    'id' => 78,
                    'region_id' => 13,
                    'name' => 'Mbarali District Council',
                ),
            78 =>
                array(
                    'id' => 79,
                    'region_id' => 13,
                    'name' => 'Mbeya City Council',
                ),
            79 =>
                array(
                    'id' => 80,
                    'region_id' => 13,
                    'name' => 'Mbeya District Council',
                ),
            80 =>
                array(
                    'id' => 81,
                    'region_id' => 13,
                    'name' => 'Rungwe District Council',
                ),
            81 =>
                array(
                    'id' => 82,
                    'region_id' => 14,
                    'name' => 'Gairo District Council',
                ),
            82 =>
                array(
                    'id' => 83,
                    'region_id' => 14,
                    'name' => 'Kilombero District Council',
                ),
            83 =>
                array(
                    'id' => 84,
                    'region_id' => 14,
                    'name' => 'Kilosa District Council',
                ),
            84 =>
                array(
                    'id' => 85,
                    'region_id' => 14,
                    'name' => 'Morogoro District Council',
                ),
            85 =>
                array(
                    'id' => 86,
                    'region_id' => 14,
                    'name' => 'Morogoro Municipal Council',
                ),
            86 =>
                array(
                    'id' => 87,
                    'region_id' => 14,
                    'name' => 'Mvomero District Council',
                ),
            87 =>
                array(
                    'id' => 88,
                    'region_id' => 14,
                    'name' => 'Ulanga District Council',
                ),
            88 =>
                array(
                    'id' => 89,
                    'region_id' => 15,
                    'name' => 'Masasi District',
                ),
            89 =>
                array(
                    'id' => 90,
                    'region_id' => 15,
                    'name' => 'Masasi District Council',
                ),
            90 =>
                array(
                    'id' => 91,
                    'region_id' => 15,
                    'name' => 'Masasi Town Council',
                ),
            91 =>
                array(
                    'id' => 92,
                    'region_id' => 15,
                    'name' => 'Mtwara District Council',
                ),
            92 =>
                array(
                    'id' => 93,
                    'region_id' => 15,
                    'name' => 'Mtwara Municipal Council',
                ),
            93 =>
                array(
                    'id' => 94,
                    'region_id' => 15,
                    'name' => 'Nanyumbu District Council',
                ),
            94 =>
                array(
                    'id' => 95,
                    'region_id' => 15,
                    'name' => 'Newala District Council',
                ),
            95 =>
                array(
                    'id' => 96,
                    'region_id' => 16,
                    'name' => 'Ilemela Municipal Council',
                ),
            96 =>
                array(
                    'id' => 97,
                    'region_id' => 16,
                    'name' => 'Kwimba District Council',
                ),
            97 =>
                array(
                    'id' => 98,
                    'region_id' => 16,
                    'name' => 'Magu District Council',
                ),
            98 =>
                array(
                    'id' => 99,
                    'region_id' => 16,
                    'name' => 'Misungwi District Council',
                ),
            99 =>
                array(
                    'id' => 100,
                    'region_id' => 16,
                    'name' => 'Nyamagana Municipal Council',
                ),
            100 =>
                array(
                    'id' => 101,
                    'region_id' => 16,
                    'name' => 'Sengerema District Council',
                ),
            101 =>
                array(
                    'id' => 102,
                    'region_id' => 16,
                    'name' => 'Ukerewe District Council',
                ),
            102 =>
                array(
                    'id' => 103,
                    'region_id' => 32,
                    'name' => 'Kati',
                ),
            103 =>
                array(
                    'id' => 104,
                    'region_id' => 32,
                    'name' => 'Kusini',
                ),
            104 =>
                array(
                    'id' => 105,
                    'region_id' => 30,
                    'name' => 'Kati District',
                ),
            105 =>
                array(
                    'id' => 106,
                    'region_id' => 30,
                    'name' => 'Kusini District',
                ),
            106 =>
                array(
                    'id' => 107,
                    'region_id' => 33,
                    'name' => 'Kaskazini A',
                ),
            107 =>
                array(
                    'id' => 108,
                    'region_id' => 33,
                    'name' => 'Kaskazini B',
                ),
            108 =>
                array(
                    'id' => 109,
                    'region_id' => 18,
                    'name' => 'Micheweni',
                ),
            109 =>
                array(
                    'id' => 110,
                    'region_id' => 18,
                    'name' => 'Wete',
                ),
            110 =>
                array(
                    'id' => 111,
                    'region_id' => 19,
                    'name' => 'Chake Chake District',
                ),
            111 =>
                array(
                    'id' => 112,
                    'region_id' => 19,
                    'name' => 'Mkoani District',
                ),
            112 =>
                array(
                    'id' => 113,
                    'region_id' => 17,
                    'name' => 'Ludewa District Council',
                ),
            113 =>
                array(
                    'id' => 114,
                    'region_id' => 17,
                    'name' => 'Makambako Town Council',
                ),
            114 =>
                array(
                    'id' => 115,
                    'region_id' => 17,
                    'name' => 'Makete District Council',
                ),
            115 =>
                array(
                    'id' => 116,
                    'region_id' => 17,
                    'name' => 'Njombe District Council',
                ),
            116 =>
                array(
                    'id' => 117,
                    'region_id' => 17,
                    'name' => 'Njombe Town Council',
                ),
            117 =>
                array(
                    'id' => 118,
                    'region_id' => 17,
                    'name' => 'Wanging\'ombe District',
                ),
            118 =>
                array(
                    'id' => 119,
                    'region_id' => 20,
                    'name' => 'Bagamoyo District Council',
                ),
            119 =>
                array(
                    'id' => 120,
                    'region_id' => 20,
                    'name' => 'Kibaha District Council',
                ),
            120 =>
                array(
                    'id' => 121,
                    'region_id' => 20,
                    'name' => 'Kibaha Town Council',
                ),
            121 =>
                array(
                    'id' => 122,
                    'region_id' => 20,
                    'name' => 'Kisarawe District Council',
                ),
            122 =>
                array(
                    'id' => 123,
                    'region_id' => 20,
                    'name' => 'Mafia District Council',
                ),
            123 =>
                array(
                    'id' => 124,
                    'region_id' => 20,
                    'name' => 'Mkuranga District Council',
                ),
            124 =>
                array(
                    'id' => 125,
                    'region_id' => 20,
                    'name' => 'Rufiji District Council',
                ),
            125 =>
                array(
                    'id' => 126,
                    'region_id' => 21,
                    'name' => 'Kalambo District Council',
                ),
            126 =>
                array(
                    'id' => 127,
                    'region_id' => 21,
                    'name' => 'Nkasi District Council',
                ),
            127 =>
                array(
                    'id' => 128,
                    'region_id' => 21,
                    'name' => 'Sumbawanga District Council',
                ),
            128 =>
                array(
                    'id' => 129,
                    'region_id' => 21,
                    'name' => 'Sumbawanga Municipal Council',
                ),
            129 =>
                array(
                    'id' => 130,
                    'region_id' => 22,
                    'name' => 'Mbinga District Council',
                ),
            130 =>
                array(
                    'id' => 131,
                    'region_id' => 22,
                    'name' => 'Songea District Council',
                ),
            131 =>
                array(
                    'id' => 132,
                    'region_id' => 22,
                    'name' => 'Songea Municipal Council',
                ),
            132 =>
                array(
                    'id' => 133,
                    'region_id' => 22,
                    'name' => 'Tunduru District Council',
                ),
            133 =>
                array(
                    'id' => 134,
                    'region_id' => 22,
                    'name' => 'Namtumbo District Council',
                ),
            134 =>
                array(
                    'id' => 135,
                    'region_id' => 22,
                    'name' => 'Nyasa District Council',
                ),
            135 =>
                array(
                    'id' => 136,
                    'region_id' => 24,
                    'name' => 'Bariadi District Council',
                ),
            136 =>
                array(
                    'id' => 137,
                    'region_id' => 24,
                    'name' => 'Busega District Council',
                ),
            137 =>
                array(
                    'id' => 138,
                    'region_id' => 24,
                    'name' => 'Itilima District Council',
                ),
            138 =>
                array(
                    'id' => 139,
                    'region_id' => 24,
                    'name' => 'Maswa District Council',
                ),
            139 =>
                array(
                    'id' => 140,
                    'region_id' => 24,
                    'name' => 'Meatu District Council',
                ),
            140 =>
                array(
                    'id' => 141,
                    'region_id' => 25,
                    'name' => 'Ikungi District Council',
                ),
            141 =>
                array(
                    'id' => 142,
                    'region_id' => 25,
                    'name' => 'Iramba District Council',
                ),
            142 =>
                array(
                    'id' => 143,
                    'region_id' => 25,
                    'name' => 'Manyoni District Council',
                ),
            143 =>
                array(
                    'id' => 144,
                    'region_id' => 25,
                    'name' => 'Mkalama District Council',
                ),
            144 =>
                array(
                    'id' => 145,
                    'region_id' => 25,
                    'name' => 'Singida District Council',
                ),
            145 =>
                array(
                    'id' => 146,
                    'region_id' => 25,
                    'name' => 'Singida Municipal Council',
                ),
            146 =>
                array(
                    'id' => 147,
                    'region_id' => 26,
                    'name' => 'Igunga District Council',
                ),
            147 =>
                array(
                    'id' => 148,
                    'region_id' => 26,
                    'name' => 'Kaliua District Council',
                ),
            148 =>
                array(
                    'id' => 149,
                    'region_id' => 26,
                    'name' => 'Nzega District Council',
                ),
            149 =>
                array(
                    'id' => 150,
                    'region_id' => 26,
                    'name' => 'Sikonge District Council',
                ),
            150 =>
                array(
                    'id' => 151,
                    'region_id' => 26,
                    'name' => 'Tabora Municipal Council',
                ),
            151 =>
                array(
                    'id' => 152,
                    'region_id' => 26,
                    'name' => 'Urambo District Council',
                ),
            152 =>
                array(
                    'id' => 153,
                    'region_id' => 26,
                    'name' => 'Uyui District Council',
                ),
            153 =>
                array(
                    'id' => 154,
                    'region_id' => 27,
                    'name' => 'Handeni District Council',
                ),
            154 =>
                array(
                    'id' => 155,
                    'region_id' => 27,
                    'name' => 'Handeni Town Council',
                ),
            155 =>
                array(
                    'id' => 156,
                    'region_id' => 27,
                    'name' => 'Kilindi District Council',
                ),
            156 =>
                array(
                    'id' => 157,
                    'region_id' => 27,
                    'name' => 'Korogwe Town Council',
                ),
            157 =>
                array(
                    'id' => 158,
                    'region_id' => 27,
                    'name' => 'Korogwe District Council',
                ),
            158 =>
                array(
                    'id' => 159,
                    'region_id' => 27,
                    'name' => 'Lushoto District Council',
                ),
            159 =>
                array(
                    'id' => 160,
                    'region_id' => 27,
                    'name' => 'Muheza District Council',
                ),
            160 =>
                array(
                    'id' => 161,
                    'region_id' => 27,
                    'name' => 'Mkinga District Council',
                ),
            161 =>
                array(
                    'id' => 162,
                    'region_id' => 27,
                    'name' => 'Pangani District Council',
                ),
            162 =>
                array(
                    'id' => 163,
                    'region_id' => 27,
                    'name' => 'Tanga City Council',
                ),
            163 =>
                array(
                    'id' => 164,
                    'region_id' => 23,
                    'name' => 'Kahama Town Council',
                ),
            164 =>
                array(
                    'id' => 165,
                    'region_id' => 23,
                    'name' => 'Kahama District Council',
                ),
            165 =>
                array(
                    'id' => 166,
                    'region_id' => 23,
                    'name' => 'Kishapu District Council',
                ),
            166 =>
                array(
                    'id' => 167,
                    'region_id' => 23,
                    'name' => 'Shinyanga District Council',
                ),
            167 =>
                array(
                    'id' => 168,
                    'region_id' => 23,
                    'name' => 'Shinyanga Municipal Council',
                ),
            168 =>
                array(
                    'id' => 169,
                    'region_id' => 29,
                    'name' => 'Songwe District',
                ),
            169 =>
                array(
                    'id' => 170,
                    'region_id' => 29,
                    'name' => 'Mbozi District',
                ),
            170 =>
                array(
                    'id' => 171,
                    'region_id' => 29,
                    'name' => 'Ileje District',
                ),
            171 =>
                array(
                    'id' => 172,
                    'region_id' => 31,
                    'name' => 'Momba District',
                ),
            172 =>
                array(
                    'id' => 173,
                    'region_id' => 14,
                    'name' => 'Malinyi District Council',
                ),
            173 =>
                array(
                    'id' => 174,
                    'region_id' => 14,
                    'name' => 'Ifakara Township Council',
                ),
            174 =>
                array(
                    'id' => 175,
                    'region_id' => 15,
                    'name' => 'Tandahimba District Council',
                ),
            175 =>
                array(
                    'id' => 176,
                    'region_id' => 29,
                    'name' => 'Momba District',
                ),
        ));
    }
}
