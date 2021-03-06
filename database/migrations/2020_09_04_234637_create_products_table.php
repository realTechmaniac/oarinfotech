<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('product_name',100)->unique();
            $table->mediumInteger('old_price');
            $table->mediumInteger('new_price');
            $table->string('product_colour');
            $table->longText('product_description');
            $table->string('product_discount');
            $table->string('product_category');
            $table->string('product_status');
            $table->string('product_image');
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
}
