<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->float('price');
            $table->integer('class_id');
            $table->integer('company_id');

        });

        Schema::create('products_class', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');

        });

        Schema::create('products_company', function(Blueprint $table)
        {
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
