<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class RegionsTableSeeder extends Seeder
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
            array('id' => '1', 'region_name' => 'Arusha'),
            array('id' => '2', 'region_name' => 'Dar es Salaam'),
            array('id' => '3', 'region_name' => 'Dodoma'),
            array('id' => '4', 'region_name' => 'Geita'),
            array('id' => '5', 'region_name' => 'Iringa'),
            array('id' => '6', 'region_name' => 'Kagera'),
            array('id' => '7', 'region_name' => 'Katavi'),
            array('id' => '8', 'region_name' => 'Kigoma'),
            array('id' => '9', 'region_name' => 'Kilimanjaro'),
            array('id' => '10', 'region_name' => 'Lindi'),
            array('id' => '11', 'region_name' => 'Manyara'),
            array('id' => '12', 'region_name' => 'Mara'),
            array('id' => '13', 'region_name' => 'Mbeya'),
            array('id' => '14', 'region_name' => 'Morogoro'),
            array('id' => '15', 'region_name' => 'Mtwara'),
            array('id' => '16', 'region_name' => 'Mwanza'),
            array('id' => '17', 'region_name' => 'Njombe'),
            array('id' => '18', 'region_name' => 'Kongwa'),
            array('id' => '19', 'region_name' => 'Pemba Kusini'),
            array('id' => '20', 'region_name' => 'Pwani'),
            array('id' => '21', 'region_name' => 'Rukwa'),
            array('id' => '22', 'region_name' => 'Ruvuma'),
            array('id' => '23', 'region_name' => 'Shinyanga'),
            array('id' => '24', 'region_name' => 'Simiyu'),
            array('id' => '25', 'region_name' => 'Singida'),
            array('id' => '26', 'region_name' => 'Tabora'),
            array('id' => '27', 'region_name' => 'Tanga'),
            array('id' => '30', 'region_name' => 'Zanzibar Mjini Magharibi'),
            array('id' => '31', 'region_name' => 'Songwe'),
            array('id' => '32', 'region_name' => 'Kusini unguja')
        ));

        $this->enableForeignKeys("regions");
    }
}