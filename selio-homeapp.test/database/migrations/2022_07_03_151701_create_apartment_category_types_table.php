<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentCategoryTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_category_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('apartment_id');
            $table->unsignedBigInteger('category_type_id');

            $table->index('apartment_id', 'apartment_category_type_apartment_idx');
            $table->index('category_type_id', 'apartment_category_type_category_type_idx');

            $table->foreign('apartment_id', 'apartment_category_type_apartment_fk')->on('apartments')->references('id');
            $table->foreign('category_type_id', 'apartment_category_type_category_type_fk')->on('category_types')->references('id');
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
        Schema::dropIfExists('apartment_category_types');
    }
}
