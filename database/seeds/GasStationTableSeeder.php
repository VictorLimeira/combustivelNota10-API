<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GasStationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gas_station')->insert([
            'gas_station_cod' => '001',
            'gas_station_name' => 'Posto Jacutinga',
            'longitude' => '-5.8628852',
            'latitude' => '-35.1922251',
            'city' => 'Natal',
            'state' => 'RN',
            'show_in_app' => '1',
            'last_visit_date' => '2019-01-10 14:41:38',
            'store' => '1',
            'oil_change' => '1',
            'washing' => '0',
            'rubber_repair' => '1',
            'common_ethanol' => '1',
            'additive_ethanol' => '1',
            'common_gasoline' => '1',
            'additive_gasoline' => '1',
            'premium_gasoline' => '0',
            's10_diesel_common' => '1',
            's10_diesel_additive' => '1',
            's500_diesel_common' => '1',
            's500_diesel_additive' => '1',
        ]);

        DB::table('gas_station')->insert([
            'gas_station_cod' => '002',
            'gas_station_name' => 'Posto Shell Rota do Sol',
            'longitude' => '-5.88257',
            'latitude' => '-35.181095',
            'city' => 'Natal',
            'state' => 'RN',
            'show_in_app' => '0',
            'last_visit_date' => '2019-02-10 14:41:38',
            'store' => '1',
            'oil_change' => '1',
            'washing' => '1',
            'rubber_repair' => '0',
            'common_ethanol' => '1',
            'additive_ethanol' => '0',
            'common_gasoline' => '1',
            'additive_gasoline' => '0',
            'premium_gasoline' => '1',
            's10_diesel_common' => '1',
            's10_diesel_additive' => '1',
            's500_diesel_common' => '0',
            's500_diesel_additive' => '0',
        ]);

        DB::table('gas_station')->insert([
            'gas_station_cod' => '003',
            'gas_station_name' => 'Auto Posto Esmeraldo',
            'longitude' => '-5.857018',
            'latitude' => '-35.194856',
            'city' => 'Natal',
            'state' => 'RN',
            'show_in_app' => '1',
            'last_visit_date' => '2019-03-10 14:41:38',
            'store' => '1',
            'oil_change' => '0',
            'washing' => '1',
            'rubber_repair' => '0',
            'common_ethanol' => '1',
            'additive_ethanol' => '1',
            'common_gasoline' => '1',
            'additive_gasoline' => '0',
            'premium_gasoline' => '0',
            's10_diesel_common' => '1',
            's10_diesel_additive' => '1',
            's500_diesel_common' => '0',
            's500_diesel_additive' => '0',
        ]);
    }
}
