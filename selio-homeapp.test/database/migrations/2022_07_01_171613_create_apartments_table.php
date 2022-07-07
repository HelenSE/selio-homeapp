<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200)->nullable(false);
            $table->string('address');
            $table->integer('latitude')->nullable();
            $table->integer('longitude')->nullable();
            $table->longText('description')->nullable();
            $table->longText('features')->nullable();
            $table->string('main_photo')->nullable(true);
            $table->integer('people_minimum')->nullable();
            $table->integer('people_maximum')->nullable();
            $table->integer('price_per_hour')->nullable();
            $table->boolean('is_featured')->default(0)->nullable();
            $table->unsignedBigInteger('location_id')->nullable();
            $table->index('location_id', 'apartment_location_idx');
            $table->foreign('location_id', 'apartment_location_fk')->on('locations')->references('id');
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
        Schema::dropIfExists('apartments');
    }
}
