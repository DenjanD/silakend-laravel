<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleUsagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_usages', function (Blueprint $table) {
            $table->uuid('usage_id')->primary();
            $table->text('description');
            $table->smallInteger('personel_count');
            $table->string('origin');
            $table->string('destination');
            $table->dateTime('departure')->nullable();
            $table->dateTime('arrival')->nullable();
            $table->string('status');
            $table->integer('distance_count_out');
            $table->integer('distance_count_in');
            $table->text('status_description')->nullable();
            $table->foreignUuid('vehicle_id')->references('vehicle_id')->on('vehicles')->onDelete('cascade')->nullable();
            $table->foreignUuid('acceptor_id')->references('user_id')->on('users')->onDelete('cascade')->nullable();
            $table->foreignUuid('driver_id')->references('user_id')->on('users')->onDelete('cascade')->nullable();
            $table->foreignUuid('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreignUuid('ucategory_id')->references('ucategory_id')->on('usage_categories')->onDelete('cascade');
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
        Schema::dropIfExists('vehicle_usages');
    }
}