<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClientsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('lastName');
            $table->string('identification')->unique();
            $table->tinyInteger('type');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->string('PC');
            $table->string('IBAN');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->string('contactPerson');
            $table->integer('contactPhone');
            $table->string('legalPartner');
            $table->string('CIFLegalPartner');
            $table->text('comentary');
            $table->smallInteger('idUser');
            $table->boolean('otherContracts');
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
        Schema::drop('clients');
    }
}
