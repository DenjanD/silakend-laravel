<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleMaintenanceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_maintenance_details', function (Blueprint $table) {
            $table->uuid('detail_id')->primary();
            $table->string('item_name');
            $table->string('item_qty');
            $table->string('item_unit');
            $table->string('item_price');
            $table->integer('price_total');
            $table->foreignUuid('maintenance_id')->references('maintenance_id')->on('vehicle_maintenances')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_maintenance_details');
    }
}
