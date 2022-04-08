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
            $table->integer('distance_count_out')->nullable();
            $table->integer('distance_count_in')->nullable();
            $table->text('status_description')->nullable();
            $table->foreignUuid('vehicle_id')->nullable()->references('vehicle_id')->on('vehicles')->onDelete('cascade');
            $table->foreignUuid('acceptor_id')->nullable()->references('user_id')->on('users')->onDelete('cascade');
            $table->foreignUuid('driver_id')->nullable()->references('user_id')->on('users')->onDelete('cascade');
            $table->foreignUuid('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreignUuid('ucategory_id')->references('ucategory_id')->on('usage_categories')->onDelete('cascade');
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
        Schema::dropIfExists('vehicle_usages');
    }
}
