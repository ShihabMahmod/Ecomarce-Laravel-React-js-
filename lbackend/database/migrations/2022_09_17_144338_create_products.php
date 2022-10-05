<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('catagory');
            $table->string('brand');
            $table->decimal('regular_price');
            $table->decimal('sale_price');
            $table->string('SKU');
            $table->string('short_description');
            $table->text('long_description');
            $table->string('warenty');
            $table->string('attribute');
            $table->decimal('shipping');
            $table->string('image');
            $table->string('status');
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
        Schema::dropIfExists('products');
    }
};
