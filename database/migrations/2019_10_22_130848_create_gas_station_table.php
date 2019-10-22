<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGasStationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gas_station', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('gas_station_cod', 8);
            $table->char('gas_station_name', 40);
            $table->float('longitude', 10, 6);
            $table->float('latitude', 10, 6);
            $table->char('city', 30);
            $table->char('state', 2);
            $table->boolean('show_in_app');
            $table->dateTime('last_visit_date');
            $table->boolean('store');
            $table->boolean('oil_change');
            $table->boolean('washing');
            $table->boolean('rubber_repair');
            $table->boolean('common_ethanol');
            $table->boolean('additive_ethanol');
            $table->boolean('common_gasoline');
            $table->boolean('additive_gasoline');
            $table->boolean('premium_gasoline');
            $table->boolean('s10_diesel_common');
            $table->boolean('s1_diesel_additive');
            $table->boolean('s500_diesel_common');
            $table->boolean('s500_diesel_additive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gas_station');
    }
}
