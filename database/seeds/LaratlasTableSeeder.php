<?php

use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaratlasTableSeeder extends Seeder
{
    use DisableForeignKeys;
    use TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creating regions
        $this->disableForeignKeys('regions');
        $this->delete('regions');
        DB::table('regions')->insert([
            [
                'id'          => 1,
                'region_name' => 'Arusha',
                'latitude'    => -3.386925,
                'longitude'   => 36.682995,
            ],
            [
                'id'           => 2,
                'region_name'  => 'Dar es Salaam',
                'latitude'     => -6.802353,
                'longitude'    => 39.279556,
            ],
            [
                'id'           => 3,
                'region_name'  => 'Dodoma',
                'latitude'     => -6.161184,
                'longitude'    => 35.745426,
            ],
            [
                'id'          => 4,
                'region_name' => 'Geita',
                'latitude'    => -2.86667,
                'longitude'   => 32.16667,
            ],
            [
                'id'          => 5,
                'region_name' => 'Iringa',
                'latitude'    => -7.773094,
                'longitude'   => 35.699120,
            ],
            [
                'id'          => 6,
                'region_name' => 'Kagera',
                'latitude'    => -2.375112,
                'longitude'   => 31.262637,
            ],
            [
                'id'          => 7,
                'region_name' => 'Katavi',
                'latitude'    => -19.572505,
                'longitude'   => -65.761871,
            ],
            [
                'id'          => 8,
                'region_name' => 'Kigoma',
                'latitude'    => -4.893941,
                'longitude'   => 29.673386,
            ],
            [
                'id'          => 9,
                'region_name' => 'Kilimanjaro',
                'latitude'    => -3.067425,
                'longitude'   => 37.355627,
            ],
            [
                'id'          => 10,
                'region_name' => 'Lindi',
                'latitude'    => -9.987608,
                'longitude'   => 39.698248,
            ],
            [
                'id'          => 11,
                'region_name' => 'Manyara',
                'latitude'    => -4.315006,
                'longitude'   => 36.954107,
            ],
            [
                'id'          => 12,
                'region_name' => 'Mara',
                'latitude'    => -1.7753538,
                'longitude'   => 34.1531947,
            ],
            [
                'id'          => 13,
                'region_name' => 'Mbeya',
                'latitude'    => -8.909401,
                'longitude'   => 33.460773,
            ],
            [
                'id'          => 14,
                'region_name' => 'Morogoro',
                'latitude'    => -6.830373,
                'longitude'   => 37.670589,
            ],
            [
                'id'          => 15,
                'region_name' => 'Mtwara',
                'latitude'    => -10.311224,
                'longitude'   => 40.175981,
            ],
            [
                'id'          => 16,
                'region_name' => 'Mwanza',
                'latitude'    => -15.609150,
                'longitude'   => 34.522820,
            ],
            [
                'id'          => 17,
                'region_name' => 'Njombe',
                'latitude'    => -8.914753,
                'longitude'   => 34.685651,
            ],
            [
                'id'          => 18,
                'region_name' => 'Pemba kaskazini',
                'latitude'    => -5.031935,
                'longitude'   => 39.775557,
            ],
            [
                'id'          => 19,
                'region_name' => 'Kusini Pemba Region of Zanzibar',
                'latitude'    => -5.314696,
                'longitude'   => 39.754951,
            ],
            [
                'id'          => 20,
                'region_name' => 'Pwani',
                'latitude'    => -7.323771,
                'longitude'   => 38.820545,
            ],
            [
                'id'          => 21,
                'region_name' => 'Rukwa',
                'latitude'    => -6.965368,
                'longitude'   => 31.262637,
            ],
            [
                'id'          => 22,
                'region_name' => 'Ruvuma',
                'latitude'    => -10.687872,
                'longitude'   => 36.263085,
            ],
            [
                'id'          => 23,
                'region_name' => 'Shinyanga',
                'latitude'    => -3.680996,
                'longitude'   => 33.427140,
            ],
            [
                'id'          => 24,
                'region_name' => 'Simiyu',
                'latitude'    => -2.535588,
                'longitude'   => 33.420472,
            ],
            [
                'id'          => 25,
                'region_name' => 'Singida',
                'latitude'    => -4.825352,
                'longitude'   => 34.763031,
            ],
            [
                'id'          => 26,
                'region_name' => 'Tabora',
                'latitude'    => -5.042495,
                'longitude'   => 32.819733,
            ],
            [
                'id'          => 27,
                'region_name' => 'Tanga',
                'latitude'    => -5.088875,
                'longitude'   => 39.102323,
            ],
            [
                'id'          => 28,
                'region_name' => 'Unguja kaskazini',
                'latitude'    => -5.939509,
                'longitude'   => 39.279101,
            ],
            [
                'id'          => 29,
                'region_name' => 'Songwe',
                'latitude'    => -9.7000,
                'longitude'   => 33.9333,
            ],
            [
                'id'          => 30,
                'region_name' => 'Kusini Unguja Region of Zanzibar',
                'latitude'    => -6.203656,
                'longitude'   => 39.362120,
            ],
            [
                'id'          => 31,
                'region_name' => 'Mjini Magharibi Region of Zanzibar',
                'latitude'    => -6.229814,
                'longitude'   => 39.258329,
            ],
        ]);
        $this->enableForeignKeys('regions');

        //creating districts
        $this->disableForeignKeys('districts');
        $this->delete('districts');
        DB::table('districts')->insert([
            0 => [
                'id'        => 1,
                'region_id' => 1,
                'name'      => 'Meru District Council',
            ],
            1 => [
                'id'        => 2,
                'region_id' => 1,
                'name'      => 'Arusha City Council ',
            ],
            2 => [
                'id'        => 3,
                'region_id' => 1,
                'name'      => 'Arusha District Council',
            ],
            3 => [
                'id'        => 4,
                'region_id' => 1,
                'name'      => 'Karatu District Council ',
            ],
            4 => [
                'id'        => 5,
                'region_id' => 1,
                'name'      => 'Longido District Council ',
            ],
            5 => [
                'id'        => 6,
                'region_id' => 1,
                'name'      => 'Monduli District Council ',
            ],
            6 => [
                'id'        => 7,
                'region_id' => 1,
                'name'      => 'Ngorongoro District Council',
            ],
            7 => [
                'id'        => 8,
                'region_id' => 2,
                'name'      => 'Ilala Municipal Council',
            ],
            8 => [
                'id'        => 9,
                'region_id' => 2,
                'name'      => 'Kinondoni Municipal Council',
            ],
            9 => [
                'id'        => 10,
                'region_id' => 2,
                'name'      => 'Temeke Municipal Council',
            ],
            10 => [
                'id'        => 11,
                'region_id' => 2,
                'name'      => 'Kigamboni Municipal Council',
            ],
            11 => [
                'id'        => 12,
                'region_id' => 2,
                'name'      => 'Ubungo Municipal Council',
            ],
            12 => [
                'id'        => 13,
                'region_id' => 3,
                'name'      => 'Bahi District Council',
            ],
            13 => [
                'id'        => 14,
                'region_id' => 3,
                'name'      => 'Chamwino District Council',
            ],
            14 => [
                'id'        => 15,
                'region_id' => 3,
                'name'      => 'Chemba District Council',
            ],
            15 => [
                'id'        => 16,
                'region_id' => 3,
                'name'      => 'Dodoma Municipal Council',
            ],
            16 => [
                'id'        => 17,
                'region_id' => 3,
                'name'      => 'Kondoa District Council',
            ],
            17 => [
                'id'        => 18,
                'region_id' => 3,
                'name'      => 'Kongwa District Council',
            ],
            18 => [
                'id'        => 19,
                'region_id' => 3,
                'name'      => 'Mpwapwa District Council',
            ],
            19 => [
                'id'        => 20,
                'region_id' => 4,
                'name'      => 'Bukombe District Council',
            ],
            20 => [
                'id'        => 21,
                'region_id' => 4,
                'name'      => 'Chato District Council',
            ],
            21 => [
                'id'        => 22,
                'region_id' => 4,
                'name'      => 'Geita Town Council & Geita District Council',
            ],
            22 => [
                'id'        => 23,
                'region_id' => 4,
                'name'      => 'Mbogwe District Council',
            ],
            23 => [
                'id'        => 24,
                'region_id' => 4,
                'name'      => 'Nyang\'hwale District Council',
            ],
            24 => [
                'id'        => 25,
                'region_id' => 5,
                'name'      => 'Iringa District Council',
            ],
            25 => [
                'id'        => 26,
                'region_id' => 5,
                'name'      => 'Iringa Municipal Council',
            ],
            26 => [
                'id'        => 27,
                'region_id' => 5,
                'name'      => 'Kilolo District Council',
            ],
            27 => [
                'id'        => 28,
                'region_id' => 5,
                'name'      => 'Mafinga Town Council',
            ],
            28 => [
                'id'        => 29,
                'region_id' => 5,
                'name'      => 'Mufindi District Council',
            ],
            29 => [
                'id'        => 30,
                'region_id' => 6,
                'name'      => 'Biharamulo District Council',
            ],
            30 => [
                'id'        => 31,
                'region_id' => 6,
                'name'      => 'Bukoba District Council',
            ],
            31 => [
                'id'        => 32,
                'region_id' => 6,
                'name'      => 'Bukoba Municipal Council',
            ],
            32 => [
                'id'        => 33,
                'region_id' => 6,
                'name'      => 'Karagwe District Council',
            ],
            33 => [
                'id'        => 34,
                'region_id' => 6,
                'name'      => 'Kyerwa District Council',
            ],
            34 => [
                'id'        => 35,
                'region_id' => 6,
                'name'      => 'Missenyi District Council',
            ],
            35 => [
                'id'        => 36,
                'region_id' => 6,
                'name'      => 'Muleba District Council',
            ],
            36 => [
                'id'        => 37,
                'region_id' => 6,
                'name'      => 'Ngara District Council',
            ],
            37 => [
                'id'        => 38,
                'region_id' => 7,
                'name'      => 'Mlele District Council',
            ],
            38 => [
                'id'        => 39,
                'region_id' => 7,
                'name'      => 'Mpanda District Council',
            ],
            39 => [
                'id'        => 40,
                'region_id' => 7,
                'name'      => 'Mpanda Town Council',
            ],
            40 => [
                'id'        => 41,
                'region_id' => 8,
                'name'      => 'Buhigwe District Council',
            ],
            41 => [
                'id'        => 42,
                'region_id' => 8,
                'name'      => 'Kakonko District Council',
            ],
            42 => [
                'id'        => 43,
                'region_id' => 8,
                'name'      => 'Kasulu District Council',
            ],
            43 => [
                'id'        => 44,
                'region_id' => 8,
                'name'      => 'Kasulu Town Council',
            ],
            44 => [
                'id'        => 45,
                'region_id' => 8,
                'name'      => 'Kibondo District Council',
            ],
            45 => [
                'id'        => 46,
                'region_id' => 8,
                'name'      => 'Kigoma District Council',
            ],
            46 => [
                'id'        => 47,
                'region_id' => 8,
                'name'      => 'Kigoma-Ujiji Municipal Council',
            ],
            47 => [
                'id'        => 48,
                'region_id' => 8,
                'name'      => 'Uvinza District Council',
            ],
            48 => [
                'id'        => 49,
                'region_id' => 9,
                'name'      => 'Hai District Council',
            ],
            49 => [
                'id'        => 50,
                'region_id' => 9,
                'name'      => 'Moshi District Council',
            ],
            50 => [
                'id'        => 51,
                'region_id' => 9,
                'name'      => 'Moshi Municipal Council',
            ],
            51 => [
                'id'        => 52,
                'region_id' => 9,
                'name'      => 'Mwanga District Council',
            ],
            52 => [
                'id'        => 53,
                'region_id' => 9,
                'name'      => 'Rombo District Council',
            ],
            53 => [
                'id'        => 54,
                'region_id' => 9,
                'name'      => 'Same District Council',
            ],
            54 => [
                'id'        => 55,
                'region_id' => 9,
                'name'      => 'Siha District Council',
            ],
            55 => [
                'id'        => 56,
                'region_id' => 10,
                'name'      => 'Kilwa District Council',
            ],
            56 => [
                'id'        => 57,
                'region_id' => 10,
                'name'      => 'Lindi District Council',
            ],
            57 => [
                'id'        => 58,
                'region_id' => 10,
                'name'      => 'Lindi Municipal Council',
            ],
            58 => [
                'id'        => 59,
                'region_id' => 10,
                'name'      => 'Liwale District Council',
            ],
            59 => [
                'id'        => 60,
                'region_id' => 10,
                'name'      => 'Nachingwea District Council',
            ],
            60 => [
                'id'        => 61,
                'region_id' => 10,
                'name'      => 'Ruangwa District Council',
            ],
            61 => [
                'id'        => 62,
                'region_id' => 11,
                'name'      => 'Babati Town Council',
            ],
            62 => [
                'id'        => 63,
                'region_id' => 11,
                'name'      => 'Babati District Council',
            ],
            63 => [
                'id'        => 64,
                'region_id' => 11,
                'name'      => 'Hanang District Council',
            ],
            64 => [
                'id'        => 65,
                'region_id' => 11,
                'name'      => 'Kiteto District Council',
            ],
            65 => [
                'id'        => 66,
                'region_id' => 11,
                'name'      => 'Mbulu District Council',
            ],
            66 => [
                'id'        => 67,
                'region_id' => 11,
                'name'      => 'Simanjiro District Council',
            ],
            67 => [
                'id'        => 68,
                'region_id' => 12,
                'name'      => 'Bunda District Council',
            ],
            68 => [
                'id'        => 69,
                'region_id' => 12,
                'name'      => 'Butiama District Council',
            ],
            69 => [
                'id'        => 70,
                'region_id' => 12,
                'name'      => 'Musoma District Council',
            ],
            70 => [
                'id'        => 71,
                'region_id' => 12,
                'name'      => 'Musoma Municipal Council',
            ],
            71 => [
                'id'        => 72,
                'region_id' => 12,
                'name'      => 'Rorya District Council',
            ],
            72 => [
                'id'        => 73,
                'region_id' => 12,
                'name'      => 'Serengeti District Council',
            ],
            73 => [
                'id'        => 74,
                'region_id' => 12,
                'name'      => 'Tarime District Council',
            ],
            74 => [
                'id'        => 75,
                'region_id' => 13,
                'name'      => 'Busokelo District Council',
            ],
            75 => [
                'id'        => 76,
                'region_id' => 13,
                'name'      => 'Chunya District Council',
            ],
            76 => [
                'id'        => 77,
                'region_id' => 13,
                'name'      => 'Kyela District Council',
            ],
            77 => [
                'id'        => 78,
                'region_id' => 13,
                'name'      => 'Mbarali District Council',
            ],
            78 => [
                'id'        => 79,
                'region_id' => 13,
                'name'      => 'Mbeya City Council',
            ],
            79 => [
                'id'        => 80,
                'region_id' => 13,
                'name'      => 'Mbeya District Council',
            ],
            80 => [
                'id'        => 81,
                'region_id' => 13,
                'name'      => 'Rungwe District Council',
            ],
            81 => [
                'id'        => 82,
                'region_id' => 14,
                'name'      => 'Gairo District Council',
            ],
            82 => [
                'id'        => 83,
                'region_id' => 14,
                'name'      => 'Kilombero District Council',
            ],
            83 => [
                'id'        => 84,
                'region_id' => 14,
                'name'      => 'Kilosa District Council',
            ],
            84 => [
                'id'        => 85,
                'region_id' => 14,
                'name'      => 'Morogoro District Council',
            ],
            85 => [
                'id'        => 86,
                'region_id' => 14,
                'name'      => 'Morogoro Municipal Council',
            ],
            86 => [
                'id'        => 87,
                'region_id' => 14,
                'name'      => 'Mvomero District Council',
            ],
            87 => [
                'id'        => 88,
                'region_id' => 14,
                'name'      => 'Ulanga District Council',
            ],
            88 => [
                'id'        => 89,
                'region_id' => 15,
                'name'      => 'Masasi District',
            ],
            89 => [
                'id'        => 90,
                'region_id' => 15,
                'name'      => 'Masasi District Council',
            ],
            90 => [
                'id'        => 91,
                'region_id' => 15,
                'name'      => 'Masasi Town Council',
            ],
            91 => [
                'id'        => 92,
                'region_id' => 15,
                'name'      => 'Mtwara District Council',
            ],
            92 => [
                'id'        => 93,
                'region_id' => 15,
                'name'      => 'Mtwara Municipal Council',
            ],
            93 => [
                'id'        => 94,
                'region_id' => 15,
                'name'      => 'Nanyumbu District Council',
            ],
            94 => [
                'id'        => 95,
                'region_id' => 15,
                'name'      => 'Newala District Council',
            ],
            95 => [
                'id'        => 96,
                'region_id' => 16,
                'name'      => 'Ilemela Municipal Council',
            ],
            96 => [
                'id'        => 97,
                'region_id' => 16,
                'name'      => 'Kwimba District Council',
            ],
            97 => [
                'id'        => 98,
                'region_id' => 16,
                'name'      => 'Magu District Council',
            ],
            98 => [
                'id'        => 99,
                'region_id' => 16,
                'name'      => 'Misungwi District Council',
            ],
            99 => [
                'id'        => 100,
                'region_id' => 16,
                'name'      => 'Nyamagana Municipal Council',
            ],
            100 => [
                'id'        => 101,
                'region_id' => 16,
                'name'      => 'Sengerema District Council',
            ],
            101 => [
                'id'        => 102,
                'region_id' => 16,
                'name'      => 'Ukerewe District Council',
            ],
            102 => [
                'id'        => 103,
                'region_id' => 32,
                'name'      => 'Kati',
            ],
            103 => [
                'id'        => 104,
                'region_id' => 32,
                'name'      => 'Kusini',
            ],
            104 => [
                'id'        => 105,
                'region_id' => 30,
                'name'      => 'Kati District',
            ],
            105 => [
                'id'        => 106,
                'region_id' => 30,
                'name'      => 'Kusini District',
            ],
            106 => [
                'id'        => 107,
                'region_id' => 33,
                'name'      => 'Kaskazini A',
            ],
            107 => [
                'id'        => 108,
                'region_id' => 33,
                'name'      => 'Kaskazini B',
            ],
            108 => [
                'id'        => 109,
                'region_id' => 18,
                'name'      => 'Micheweni',
            ],
            109 => [
                'id'        => 110,
                'region_id' => 18,
                'name'      => 'Wete',
            ],
            110 => [
                'id'        => 111,
                'region_id' => 19,
                'name'      => 'Chake Chake District',
            ],
            111 => [
                'id'        => 112,
                'region_id' => 19,
                'name'      => 'Mkoani District',
            ],
            112 => [
                'id'        => 113,
                'region_id' => 17,
                'name'      => 'Ludewa District Council',
            ],
            113 => [
                'id'        => 114,
                'region_id' => 17,
                'name'      => 'Makambako Town Council',
            ],
            114 => [
                'id'        => 115,
                'region_id' => 17,
                'name'      => 'Makete District Council',
            ],
            115 => [
                'id'        => 116,
                'region_id' => 17,
                'name'      => 'Njombe District Council',
            ],
            116 => [
                'id'        => 117,
                'region_id' => 17,
                'name'      => 'Njombe Town Council',
            ],
            117 => [
                'id'        => 118,
                'region_id' => 17,
                'name'      => 'Wanging\'ombe District',
            ],
            118 => [
                'id'        => 119,
                'region_id' => 20,
                'name'      => 'Bagamoyo District Council',
            ],
            119 => [
                'id'        => 120,
                'region_id' => 20,
                'name'      => 'Kibaha District Council',
            ],
            120 => [
                'id'        => 121,
                'region_id' => 20,
                'name'      => 'Kibaha Town Council',
            ],
            121 => [
                'id'        => 122,
                'region_id' => 20,
                'name'      => 'Kisarawe District Council',
            ],
            122 => [
                'id'        => 123,
                'region_id' => 20,
                'name'      => 'Mafia District Council',
            ],
            123 => [
                'id'        => 124,
                'region_id' => 20,
                'name'      => 'Mkuranga District Council',
            ],
            124 => [
                'id'        => 125,
                'region_id' => 20,
                'name'      => 'Rufiji District Council',
            ],
            125 => [
                'id'        => 126,
                'region_id' => 21,
                'name'      => 'Kalambo District Council',
            ],
            126 => [
                'id'        => 127,
                'region_id' => 21,
                'name'      => 'Nkasi District Council',
            ],
            127 => [
                'id'        => 128,
                'region_id' => 21,
                'name'      => 'Sumbawanga District Council',
            ],
            128 => [
                'id'        => 129,
                'region_id' => 21,
                'name'      => 'Sumbawanga Municipal Council',
            ],
            129 => [
                'id'        => 130,
                'region_id' => 22,
                'name'      => 'Mbinga District Council',
            ],
            130 => [
                'id'        => 131,
                'region_id' => 22,
                'name'      => 'Songea District Council',
            ],
            131 => [
                'id'        => 132,
                'region_id' => 22,
                'name'      => 'Songea Municipal Council',
            ],
            132 => [
                'id'        => 133,
                'region_id' => 22,
                'name'      => 'Tunduru District Council',
            ],
            133 => [
                'id'        => 134,
                'region_id' => 22,
                'name'      => 'Namtumbo District Council',
            ],
            134 => [
                'id'        => 135,
                'region_id' => 22,
                'name'      => 'Nyasa District Council',
            ],
            135 => [
                'id'        => 136,
                'region_id' => 24,
                'name'      => 'Bariadi District Council',
            ],
            136 => [
                'id'        => 137,
                'region_id' => 24,
                'name'      => 'Busega District Council',
            ],
            137 => [
                'id'        => 138,
                'region_id' => 24,
                'name'      => 'Itilima District Council',
            ],
            138 => [
                'id'        => 139,
                'region_id' => 24,
                'name'      => 'Maswa District Council',
            ],
            139 => [
                'id'        => 140,
                'region_id' => 24,
                'name'      => 'Meatu District Council',
            ],
            140 => [
                'id'        => 141,
                'region_id' => 25,
                'name'      => 'Ikungi District Council',
            ],
            141 => [
                'id'        => 142,
                'region_id' => 25,
                'name'      => 'Iramba District Council',
            ],
            142 => [
                'id'        => 143,
                'region_id' => 25,
                'name'      => 'Manyoni District Council',
            ],
            143 => [
                'id'        => 144,
                'region_id' => 25,
                'name'      => 'Mkalama District Council',
            ],
            144 => [
                'id'        => 145,
                'region_id' => 25,
                'name'      => 'Singida District Council',
            ],
            145 => [
                'id'        => 146,
                'region_id' => 25,
                'name'      => 'Singida Municipal Council',
            ],
            146 => [
                'id'        => 147,
                'region_id' => 26,
                'name'      => 'Igunga District Council',
            ],
            147 => [
                'id'        => 148,
                'region_id' => 26,
                'name'      => 'Kaliua District Council',
            ],
            148 => [
                'id'        => 149,
                'region_id' => 26,
                'name'      => 'Nzega District Council',
            ],
            149 => [
                'id'        => 150,
                'region_id' => 26,
                'name'      => 'Sikonge District Council',
            ],
            150 => [
                'id'        => 151,
                'region_id' => 26,
                'name'      => 'Tabora Municipal Council',
            ],
            151 => [
                'id'        => 152,
                'region_id' => 26,
                'name'      => 'Urambo District Council',
            ],
            152 => [
                'id'        => 153,
                'region_id' => 26,
                'name'      => 'Uyui District Council',
            ],
            153 => [
                'id'        => 154,
                'region_id' => 27,
                'name'      => 'Handeni District Council',
            ],
            154 => [
                'id'        => 155,
                'region_id' => 27,
                'name'      => 'Handeni Town Council',
            ],
            155 => [
                'id'        => 156,
                'region_id' => 27,
                'name'      => 'Kilindi District Council',
            ],
            156 => [
                'id'        => 157,
                'region_id' => 27,
                'name'      => 'Korogwe Town Council',
            ],
            157 => [
                'id'        => 158,
                'region_id' => 27,
                'name'      => 'Korogwe District Council',
            ],
            158 => [
                'id'        => 159,
                'region_id' => 27,
                'name'      => 'Lushoto District Council',
            ],
            159 => [
                'id'        => 160,
                'region_id' => 27,
                'name'      => 'Muheza District Council',
            ],
            160 => [
                'id'        => 161,
                'region_id' => 27,
                'name'      => 'Mkinga District Council',
            ],
            161 => [
                'id'        => 162,
                'region_id' => 27,
                'name'      => 'Pangani District Council',
            ],
            162 => [
                'id'        => 163,
                'region_id' => 27,
                'name'      => 'Tanga City Council',
            ],
            163 => [
                'id'        => 164,
                'region_id' => 23,
                'name'      => 'Kahama Town Council',
            ],
            164 => [
                'id'        => 165,
                'region_id' => 23,
                'name'      => 'Kahama District Council',
            ],
            165 => [
                'id'        => 166,
                'region_id' => 23,
                'name'      => 'Kishapu District Council',
            ],
            166 => [
                'id'        => 167,
                'region_id' => 23,
                'name'      => 'Shinyanga District Council',
            ],
            167 => [
                'id'        => 168,
                'region_id' => 23,
                'name'      => 'Shinyanga Municipal Council',
            ],
            168 => [
                'id'        => 169,
                'region_id' => 29,
                'name'      => 'Songwe District',
            ],
            169 => [
                'id'        => 170,
                'region_id' => 29,
                'name'      => 'Mbozi District',
            ],
            170 => [
                'id'        => 171,
                'region_id' => 29,
                'name'      => 'Ileje District',
            ],
            171 => [
                'id'        => 172,
                'region_id' => 31,
                'name'      => 'Momba District',
            ],
            172 => [
                'id'        => 173,
                'region_id' => 14,
                'name'      => 'Malinyi District Council',
            ],
            173 => [
                'id'        => 174,
                'region_id' => 14,
                'name'      => 'Ifakara Township Council',
            ],
            174 => [
                'id'        => 175,
                'region_id' => 15,
                'name'      => 'Tandahimba District Council',
            ],
            175 => [
                'id'        => 176,
                'region_id' => 29,
                'name'      => 'Momba District',
            ],
        ]);
    }
}
