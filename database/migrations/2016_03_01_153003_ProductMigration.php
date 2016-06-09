<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class ProductMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url_photo');
            $table->string('name');
            $table->text('description');
            $table->float('price');
            $table->integer('class_id');
            $table->integer('company_id');
            $table->integer('type');
            $table->timestamps();

        });

        Schema::create('products_class', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');


        });

        Schema::create('products_company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
        Schema::drop('product_class');
        Schema::drop('products_company');
    }
}
