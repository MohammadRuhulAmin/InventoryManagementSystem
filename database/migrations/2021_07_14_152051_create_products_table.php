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
            $table->string('product_custom_id',100);
            $table->string('product_name',100);
            $table->double('product_prize');
            $table->string('vendor_name',50);
            $table->string('product_category',50);
            $table->string('product_brand',50);
            $table->integer('product_quantity');
            $table->longText('product_details');
            $table->date('product_purchace_date');
            $table->date('product_warenti_date');
            $table->date('product_death_date')->nullable();


            // $table->string('vendor_name');
            // $table->string('vendor_contact');
            // $table->longText('vendor_details');

            
            // $table->longText('product_use_location');
            // $table->longText('product_use_location_details')->nullable();
            // $table->string('product_service_status');
            // $table->longText('product_review');


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
