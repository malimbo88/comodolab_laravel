<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricelistrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricelistrows', function (Blueprint $table) {
            // Pricelist row id
            $table->id();

            // Pricelist row foreign key
            $table->unsignedBigInteger("hotel_id");
            $table->foreign("hotel_id")->references("id")->on("hotels");

            // Pricelist row month
            $table->dateTime("month");

            // Pricelist row price
            $table->float("price", 8, 2);

            // Pricelist row created_at and updated_at
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
        Schema::dropIfExists('pricelistrows');
    }
}
